<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Model
{
    public function getBeritaFront()
    {
        $query = "SELECT `berita`.*,`kategori`.`nama_kategori` FROM `berita` INNER JOIN `kategori` ON `berita`.`id_kategori`=`kategori`.`id_kategori` ORDER BY `berita_id`DESC LIMIT 5";
        return $this->db->query($query)->result_array();
    }
}
