<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Commisions Controller
 *
 * @property \App\Model\Table\CommisionsTable $Commisions
 */
class CommisionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Shippings']
        ];
        $this->set('commisions', $this->paginate($this->Commisions));
        $this->set('_serialize', ['commisions']);
    }

    /**
     * View method
     *
     * @param string|null $id Commision id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commision = $this->Commisions->get($id, [
            'contain' => ['Shippings']
        ]);
        $this->set('commision', $commision);
        $this->set('_serialize', ['commision']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($ship = null)
    {

        //Obtencion de Parcels correspondientes al shipment a facturar

        $shipping = $this->Commisions->Shippings->get($ship, [
            'contain' => ['Fixtures','Parcels']
        ]);

        //Entrega de la info al template

        $this->set('shipping', $shipping);
        $this->set('_serialize', ['shipping']);


        //declaracion de variables para calculo de valores

        $tot_dem = 0;
        $cont = 0;
        $tot_freight = 0;
        $freightsum = 0;
        $total_vol = 0;


        //calculo de cada valor por cada parcel correspondiente al shipment

        foreach ($shipping->parcels as $parcels) {

            $tot_freight =+ $parcels->freight_100;

            if ($parcels->des_dem_char > 0) {
                $tot_dem =+ $parcels->des_dem_char;
            }

            $port = $this->Commisions->Shippings->Parcels->Ports->get($parcels->port_id);

            if ($parcels->type_of_call == 'Loading Port') {
                $total_vol =+ $parcels->volume;
                $load_port[] = $port->name;
            } else {
                $dis_port[] = $port->name;
            }

            $freightsum =+ $parcels->dem_bro * $parcels->volume;
            $cont =+ $parcels->volume;
            $cargo = $parcels->cargo;
            $unit = $parcels->unit;

        }

        //calculo final de variables de informacion

        $cargounit = [$total_vol,$unit];
        $finalfreight = $freightsum/$cont;
        $tot_com = ($tot_freight + $tot_dem)*($shipping->fixture->broker_com/100);
        $load_ports = implode('/', $load_port);
        $dis_ports = implode('/', $dis_port);

        //obtencion de datos de Shipowner y Charterer

        $shipowner = $this->Commisions->Shippings->Fixtures->Shipowners->get($shipping->fixture->shipowner_id);
        $charterer = $this->Commisions->Shippings->Fixtures->Charterers->get($shipping->fixture->charterer_id);


        $com_info = [
            'finalfreight' => $finalfreight,
            'tot_com' => $tot_com,
            'load_ports' => $load_ports,
            'dis_ports' => $dis_ports,
            'cargo' => $cargo,
            'tot_freight' => $tot_freight,
            'tot_dem' => $tot_dem,
            'total_vol' => $total_vol,
            'client' => $shipowner->full_style,
            'charterer' => $charterer->nick,
            'unit' => $unit
        ];

        $this->set('com_info',$com_info);

        $commision = $this->Commisions->newEntity();

        if ($this->request->is('post')) {

            $this->request->data['date_com'] = Time::createFromFormat('m/d/Y',$this->request->data['date_com'],'UTC');

            $commision = $this->Commisions->patchEntity($commision, $this->request->data);
            if ($this->Commisions->save($commision)) {
                $this->Flash->success(__('The commision has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commision could not be saved. Please, try again.'));
            }
        }
        $shippings = $this->Commisions->Shippings->find('list', ['limit' => 200]);
        $this->set(compact('commision', 'shippings'));
        $this->set('_serialize', ['commision']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Commision id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commision = $this->Commisions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commision = $this->Commisions->patchEntity($commision, $this->request->data);
            if ($this->Commisions->save($commision)) {
                $this->Flash->success(__('The commision has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commision could not be saved. Please, try again.'));
            }
        }
        $shippings = $this->Commisions->Shippings->find('list', ['limit' => 200]);
        $this->set(compact('commision', 'shippings'));
        $this->set('_serialize', ['commision']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Commision id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commision = $this->Commisions->get($id);
        if ($this->Commisions->delete($commision)) {
            $this->Flash->success(__('The commision has been deleted.'));
        } else {
            $this->Flash->error(__('The commision could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
