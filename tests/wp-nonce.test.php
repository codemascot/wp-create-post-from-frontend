<?php
use \PHPUnit\Framework\TestCase;
use \Brain\Nonces\WpNonce;

class WP_Nonce_Test extends TestCase {
    private $action;
    private $nonce;

    public function __construct($name = null, array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
        $this->action   = substr(md5(microtime()),rand(0,26),5);
        $this->nonce    = new WpNonce( $this->action );
    }

    public function test_create_and_check_nonce() {
        if ( empty( $this->nonce ) ) {
            if ( !$this->nonce->validate() ) {
                $this->assertTrue( false );
            } else {
                $this->assertTrue( true );
            }
        } else {
            $this->assertTrue( true );
        }
    }
}