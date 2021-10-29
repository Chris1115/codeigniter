<?php
    class Shop_model extends CI_Model
    {
        public function getAllShopData()
        {
            return $this->db->get('shop')->result_array();
        }

        public function getAllTransactionDataById($id)
        {
            return $this->db->get('transaction', array('user_id' => $id))->result_array();
        }


        public function getInventoryById($id)
        {
            return $this->db->get_where('inventory', ['user_id' => $id])->result_array();
        }


        public function getProductById($id)
        {
            return $this->db->get('shop', array('item_id' => $id))->row_array();
        }





        public function check($item_id, $user_id, $quantity, $point)
        {
            $where = array(
                'item_id' => $item_id,
                'user_id' => $user_id
            );
            
            $this->db->where($where);
            
            if(empty($this->db->get_where('inventory', $where)))
            {
                echo 'pake update';
            }
            else
            {
                $this->addItemInventory($item_id, $user_id, $quantity);
            }
        }


        private function addItemInventory($item_id, $user_id, $quantity)
        {
            $data = array(
                'item_id' => $item_id,
                'user_id' => $user_id,
                'quantity' => (int)$quantity
            );

            $this->db->insert('inventory', $data);
        }

    }