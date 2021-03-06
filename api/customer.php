
<?php
function get($param) {
    $i = 0;
    $models = mage::getModel('customer/customer')->getCollection()->addAttributeToSelect('*')
            ->addAttributeToFilter('created_at', array('gt' => $param->date));
    foreach ($models as $item) {
        $result[$i]['entity_id'] = $item['entity_id'];
        $result[$i]['entity_type_id'] = $item['entity_type_id'];
        $result[$i]['attribute_set_id'] = $item['attribute_set_id'];
        $result[$i]['website_id'] = $item['website_id'];
        $result[$i]['email'] = $item['email'];
        $result[$i]['group_id'] = $item['group_id'];
        $result[$i]['increment_id'] = $item['increment_id'];
        $result[$i]['store_id'] = $item['store_id'];
        $result[$i]['created_at'] = $item['created_at'];
        $result[$i]['alamat_npwp'] = $item['npwp_address'];
        $result[$i]['firstname'] = $item['firstname'];
        $result[$i]['middlename'] = $item['middlename'];
        $result[$i]['lastname'] = $item['lastname'];
        $result[$i]['nama_outlet'] = $item['nama_outlet'];
        $result[$i]['pemilikl_outlet'] = $item['pemilikl_outlet'];
        $result[$i]['nomor_id'] = $item['ktp_number'];
        $result[$i]['nomor_npwp'] = $item['npwp_number'];
        $result[$i]['nama_npwp'] = $item['npwp_name'];
        $result[$i]['no_hp'] = $item['mobile_number'];
        $result[$i]['no_telp'] = $item['no_telp'];
        $result[$i]['no_fax'] = $item['no_fax'];
        $result[$i]['confirmation'] = $item['confirmation'];
        $result[$i]['tipe_outlet'] = $item['tipe_outlet'];
        $result[$i]['tipe_npwp'] = $item['tipe_npwp'];
        $result[$i]['default_billing'] = $item['default_billing'];
        $result[$i]['default_shipping'] = $item['default_shipping'];
        $address = Mage::getModel('customer/address')->load($item['default_billing']);
        $result[$i]['billing_address_detail'] = [
            'billing_address' => $address->getStreetFull(),
            'name' => $address->getCompany(),
            'phone' => $address->getTelephone(),
            'fax' => $address->getFax(),
            'provinsi' => $address->getRegion(),
            'kota' => $address->getCity(),
            'kecamatan' => $address->getKecamatan(),
            'kelurahan' => $address->getKelurahan(),
            'country' => $address->getCountry(),
            'postcode' => $address->getpostcode(),
            'stockpoint_code' => $address->getStockpointcode()
        ];
        $address = Mage::getModel('customer/address')->load($item['default_shipping']);
        $result[$i]['shipping_address_detail'] = [
            'shipping_address' => $address->getStreetFull(),
            'name' => $address->getCompany(),
            'phone' => $address->getTelephone(),
            'fax' => $address->getFax(),
            'provinsi' => $address->getRegion(),
            'kota' => $address->getCity(),
            'kecamatan' => $address->getKecamatan(),
            'kelurahan' => $address->getKelurahan(),
            'country' => $address->getCountry(),
            'postcode' => $address->getpostcode(),
            'stockpoint_code' => $address->getStockpointcode()
        ];

        $i++;
    }
    success('success', $result);
}

function post($param, $post) {
    _post('email', 'customer/customer', $post);
}

function delete($param) {
    _delete('email', $param, 'customer/customer');
}
