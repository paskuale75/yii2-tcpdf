<?php

/**
 * @copyright Copyright &copy;2018 Pasquale Pellicani
 * @company Iris Soluzioni Srl
 * @website http://www.irissoluzioni.it
 * @package yii2-tcpdf
 * @github https://github.com/paskuale75/yii2-tcpdf
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @tcpdf library 6.0.075
 * @tcpdf documentation http://www.tcpdf.org/docs.php
 * @tcpdf examples http://www.tcpdf.org/examples.php
 */

namespace paskuale75\tcpdf;

use Yii;
use yii\base\Component;

/*                                     *
 *  Component to load TCPDF Libraries  *
 *                                     */

class TCPDF extends Component
{

    public function __construct()
    {
        $vendor = Yii::getAlias('@vendor');
        // Include the main TCPDF library
        require_once($vendor.'/autoload.php');
    }

}
