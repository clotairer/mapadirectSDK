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

namespace MapaDirectSDK\Wrappers;

/**
 * @desc: interface wrapper of a webservice
 */
interface MDApiWrapperInterface
{
    /**
     * @desc: set credential
     * @param: string $url
     *
     * @return $this
     */
    public function setCredentials($credentials);

    /**
     * @desc: get credential
     *
     * @return string
     */
    public function getCredentials();

    /**
     * @desc: get API url (prod or qa)
     *
     * @return string
     */
    public function getUri();

    /**
     * @desc: get request method
     *
     * @return string
     */
    public function getMethod();

    /**
     * @desc: set request body
     * @param: string $json
     *
     * @return $this
     */
    public function setInput($json);

    /**
     * @desc: get request body
     *
     * @return string
     */
    public function getInput();

    /**
     * @desc: check if wrapper is correctly configured
     *
     * @return bool
     */
    public function check();

    /**
     * @param string $token
     * @return $this
     */
    public function setToken($token);

    /**
     * @return string
     */
    public function getToken();

    /**
     * @return string
     */
    public function getSiret();

    /**
     * @param string $siret
     * @return $this
     */
    public function setSiret($siret);
}
