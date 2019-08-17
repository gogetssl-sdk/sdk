<?php
namespace GoGetSSL\Resources;

use GoGetSSL\Resources\Abstracts\BaseResource;

class Order extends BaseResource
{
    /**
     * Create new SSL order
     *
     * @link https://partner.crazyssl.com/documents/2/create-new-order
     *
     * @param int $pid
     * @param string $period
     * @param string $csr_code
     * @param string $contact_email
     * @param string[] $dcv_method
     * @param int $unique_id
     * @param string[] $domains
     * @param int $renew
     * @param string|null $organization_name
     * @param string|null $organizationalUnitName
     * @param string|null $registered_address_line1
     * @param string|null $registered_no
     * @param string|null $country
     * @param string|null $state
     * @param string|null $city
     * @param string|null $postal_code
     * @param string|null $organization_phone
     * @param string|null $date_of_incorporation
     * @param string|null $contact_name
     * @param string|null $contact_title
     * @param string|null $contact_phone
     *
     * @return \Crazyssl\Response\AddSSLOrderResponse
     */
    public function addSSLOrder($product_id, $period, $csr, $server_count, $approver_email, $approver_emails, $webserver_type, $dns_names, $admin_firstname, $admin_lastname, $admin_phone, $admin_title, $admin_email, $dcv_method, $tech_firstname, $tech_lastname, $tech_phone, $tech_title, $tech_email, $signature_hash = 'SHA2', $admin_fox = null, $admin_organization = null, $admin_addressline1 = null, $admin_city = null, $admin_country = null, $admin_postalcode = null, $admin_region = null, $tech_organization = null, $tech_addressline1 = null, $tech_city = null, $tech_country = null, $tech_fax = null, $tech_postalcode = null, $tech_region = null, $org_name = null, $org_division = null, $org_duns = null, $org_addressline1 = null, $org_city = null, $org_country = null, $org_fax = null, $org_phone = null, $org_postalcode = null, $org_region = null)
    {
        $parameters = $this->vars(compact(['product_id', 'period', 'csr', 'server_count', 'approver_email', 'approver_emails', 'webserver_type', 'dns_names', 'admin_firstname', 'admin_lastname', 'admin_phone', 'admin_title', 'admin_email', 'dcv_method', 'tech_firstname', 'tech_lastname', 'tech_phone', 'tech_title', 'tech_email', 'signature_hash', 'admin_fox', 'admin_organization', 'admin_addressline1', 'admin_city', 'admin_country', 'admin_postalcode', 'admin_region', 'tech_organization', 'tech_addressline1', 'tech_city', 'tech_country', 'tech_fax', 'tech_postalcode', 'tech_region', 'org_name', 'org_division', 'org_duns', 'org_addressline1', 'org_city', 'org_country', 'org_fax', 'org_phone', 'org_postalcode', 'org_region',]));
        return $this->request('POST', '/orders/add_ssl_order/', $parameters);
    }

    /**
     * Query SSL Issuance Status
     *
     * @link https://partner.crazyssl.com/documents/3/query-ssl-status
     *
     * @param int $trustocean_id
     *
     * @return \Crazyssl\Response\GetOrderStatusResponse
     */
    public function getOrderStatus($trustocean_id)
    {
        $parameters = $this->vars(compact(['trustocean_id',]));
        return $this->request(__FUNCTION__, $parameters);
    }

    /**
     * Fetch the details of a SSL order
     *
     * @link https://partner.crazyssl.com/documents/4/fetch-details
     *
     * @param int $trustocean_id
     *
     * @return \Crazyssl\Response\GetSSLDetailsResponse
     */
    public function getSSLDetails($trustocean_id)
    {
        $parameters = $this->vars(compact(['trustocean_id',]));
        return $this->request(__FUNCTION__, $parameters);
    }

    /**
     * Fetch Domain Validation Status for a SSL order
     *
     * @link https://partner.crazyssl.com/documents/5/fetch-domain-validation-status
     *
     * @param int $trustocean_id
     *
     * @return \Crazyssl\Response\GetDomainValidationStatusResponse
     */
    public function getDomainValidationStatus($trustocean_id)
    {
        $parameters = $this->vars(compact(['trustocean_id',]));
        return $this->request(__FUNCTION__, $parameters);
    }

    /**
     * Change the DCV Method for Domain Name
     *
     * @link https://partner.crazyssl.com/documents/7/change-dcv-method
     *
     * @param int $trustocean_id
     * @param string $domain
     * @param string $method
     *
     * @return \Crazyssl\Response\ChangeDCVMethodResponse
     */
    public function changeDCVMethod($trustocean_id, $domain, $method)
    {
        $parameters = $this->vars(compact(['trustocean_id', 'domain', 'method',]));
        return $this->request(__FUNCTION__, $parameters);
    }

    /**
     * Resend verification emails and retry domain verification process on CA side
     *
     * @link https://partner.crazyssl.com/documents/8/resend-dcv-email
     *
     * @param int $trustocean_id
     *
     * @return \Crazyssl\Response\ReTryDcvEmailOrDCVCheckResponse
     */
    public function reTryDcvEmailOrDCVCheck($trustocean_id)
    {
        $parameters = $this->vars(compact(['trustocean_id',]));
        return $this->request(__FUNCTION__, $parameters);
    }

    /**
     * Remove domain name from a Multi Domain SSL order
     *
     * @link https://partner.crazyssl.com/documents/9/remove-domains
     *
     * @param int $trustocean_id
     *
     * @return \Crazyssl\Response\RemoveSanDomainResponse
     */
    public function removeSanDomain($trustocean_id, $domain)
    {
        $parameters = $this->vars(compact(['trustocean_id', 'domain',]));
        return $this->request(__FUNCTION__, $parameters);
    }

    /**
     * Create new SSL order
     *
     * @link https://partner.crazyssl.com/documents/2/create-new-order
     *
     * @param int $trustocean_id
     * @param string $csr_code
     * @param string $contact_email
     * @param string[] $dcv_method
     * @param int $unique_id
     * @param string[] $domains
     * @param int $renew
     * @param string|null $organization_name
     * @param string|null $organizationalUnitName
     * @param string|null $registered_address_line1
     * @param string|null $registered_no
     * @param string|null $country
     * @param string|null $state
     * @param string|null $city
     * @param string|null $postal_code
     * @param string|null $organization_phone
     * @param string|null $date_of_incorporation
     * @param string|null $contact_name
     * @param string|null $contact_title
     * @param string|null $contact_phone
     *
     * @return \Crazyssl\Response\ReissueSSLOrderResponse
     */
    public function reissueSSLOrder($trustocean_id, $csr_code, $dcv_method, $unique_id, $domains = null, $renew = null, $organization_name = null, $organizationalUnitName = null, $registered_address_line1 = null, $registered_no = null, $country = null, $state = null, $city = null, $postal_code = null, $organization_phone = null, $date_of_incorporation = null, $contact_name = null, $contact_title = null, $contact_phone = null)
    {
        $parameters = $this->vars(compact(['trustocean_id', 'csr_code', 'dcv_method', 'unique_id', 'domains', 'renew', 'organization_name', 'organizationalUnitName', 'registered_address_line1', 'registered_no', 'country', 'state', 'city', 'postal_code', 'organization_phone', 'date_of_incorporation', 'contact_name', 'contact_title', 'contact_phone',]));
        return $this->request(__FUNCTION__, $parameters);
    }
}
