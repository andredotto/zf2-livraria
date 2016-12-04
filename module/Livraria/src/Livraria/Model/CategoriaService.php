<?php

namespace Livraria\Model;

/**
 * Description of CategoriaService
 *
 * @author dotto
 */
class CategoriaService {
    
    /**
     * @var categoriaTable
     */
    protected $categoriaTable;
    
    public function __construct(CategoriaTable $table) {
        $this->categoriaTable = $table;
    }
    
    public function fetchAll() {
        $resultSet = $this->categoriaTable->select();
        return $resultSet;
    }
}
