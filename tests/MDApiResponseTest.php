<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from SARL 202 ecommence
 * Use, copy, modification or distribution of this source file without written
 * license agreement from the SARL 202 ecommence is strictly forbidden.
 * In order to obtain a license, please contact us: tech@202-ecommerce.com
 * ...........................................................................
 * INFORMATION SUR LA LICENCE D'UTILISATION
 *
 * L'utilisation de ce fichier source est soumise a une licence commerciale
 * concedee par la societe 202 ecommence
 * Toute utilisation, reproduction, modification ou distribution du present
 * fichier source sans contrat de licence ecrit de la part de la SARL 202 ecommence est
 * expressement interdite.
 * Pour obtenir une licence, veuillez contacter 202-ecommerce <tech@202-ecommerce.com>
 * ...........................................................................
 *
 * @author    202-ecommerce <tech@202-ecommerce.com>
 * @copyright Copyright (c) 202-ecommerce
 * @license   Commercial license
 */

use PHPUnit\Framework\TestCase;
use MapaDirectSDK\MDApiResponse;

class MDApiResponseTest extends TestCase
{

    public function testContent()
    {
        $response = new MDApiResponse('success');
        $data = '{"test":"test"}';
        $response->setContent($data);
        $this->assertEquals($response->getContent(), $data);
    }

    public function testSetStatus()
    {
        $response = new MDApiResponse('success');
        $this->assertTrue($response->isSuccess());
        $response->setStatus('failed');
        $this->assertFalse($response->isSuccess());
    }

    public function testError()
    {
        $response = new MDApiResponse('success');
        $data = '{"test":"test"}';
        $response->addError($data);
        $this->assertEquals($response->getErrors(), array($data));

    }
}
