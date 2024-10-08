<?php
/**
 * IJournalEntryBase
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FlowAccount Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * IJournalEntryBase Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IJournalEntryBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IJournalEntryBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company_id' => 'int',
        'document_serial' => 'string',
        'document_type' => '\OpenAPI\Client\Model\DocumentTypes',
        'status' => '\OpenAPI\Client\Model\JournalEntryStatus',
        'document_date' => '\DateTime',
        'description' => 'string',
        'description_foreign' => 'string',
        'void_description' => 'string',
        'created_on' => '\DateTime',
        'modified_on' => '\DateTime',
        'voided_on' => '\DateTime',
        'approved_on' => '\DateTime',
        'transaction_no' => 'int',
        'note' => 'string',
        'template_type' => '\OpenAPI\Client\Model\JournalEntryTemplateType',
        'contact_name' => 'string',
        'document_serial_no_prefix' => 'int',
        'created_by' => 'int',
        'modified_by' => 'int',
        'approved_by' => 'int',
        'voided_by' => 'int',
        'gallery_id' => 'int',
        'contact_id' => 'int',
        'running_number_type' => 'OneOfRunningNumberType',
        'fiscal_year_id' => 'int',
        'reference' => 'string',
        'reference_id' => 'int',
        'reference_document_type' => 'OneOfDocumentTypes',
        'is_system_document' => 'bool',
        'rule_compile_status' => '\OpenAPI\Client\Model\RuleCompileStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'company_id' => 'int64',
        'document_serial' => null,
        'document_type' => null,
        'status' => null,
        'document_date' => 'date-time',
        'description' => null,
        'description_foreign' => null,
        'void_description' => null,
        'created_on' => 'date-time',
        'modified_on' => 'date-time',
        'voided_on' => 'date-time',
        'approved_on' => 'date-time',
        'transaction_no' => 'int64',
        'note' => null,
        'template_type' => null,
        'contact_name' => null,
        'document_serial_no_prefix' => 'int64',
        'created_by' => 'int64',
        'modified_by' => 'int64',
        'approved_by' => 'int64',
        'voided_by' => 'int64',
        'gallery_id' => 'int64',
        'contact_id' => 'int64',
        'running_number_type' => null,
        'fiscal_year_id' => 'int64',
        'reference' => null,
        'reference_id' => 'int64',
        'reference_document_type' => null,
        'is_system_document' => null,
        'rule_compile_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'company_id' => 'companyId',
        'document_serial' => 'documentSerial',
        'document_type' => 'documentType',
        'status' => 'status',
        'document_date' => 'documentDate',
        'description' => 'description',
        'description_foreign' => 'descriptionForeign',
        'void_description' => 'voidDescription',
        'created_on' => 'createdOn',
        'modified_on' => 'modifiedOn',
        'voided_on' => 'voidedOn',
        'approved_on' => 'approvedOn',
        'transaction_no' => 'transactionNo',
        'note' => 'note',
        'template_type' => 'templateType',
        'contact_name' => 'contactName',
        'document_serial_no_prefix' => 'documentSerialNoPrefix',
        'created_by' => 'createdBy',
        'modified_by' => 'modifiedBy',
        'approved_by' => 'approvedBy',
        'voided_by' => 'voidedBy',
        'gallery_id' => 'galleryId',
        'contact_id' => 'contactId',
        'running_number_type' => 'runningNumberType',
        'fiscal_year_id' => 'fiscalYearId',
        'reference' => 'reference',
        'reference_id' => 'referenceId',
        'reference_document_type' => 'referenceDocumentType',
        'is_system_document' => 'isSystemDocument',
        'rule_compile_status' => 'ruleCompileStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'document_serial' => 'setDocumentSerial',
        'document_type' => 'setDocumentType',
        'status' => 'setStatus',
        'document_date' => 'setDocumentDate',
        'description' => 'setDescription',
        'description_foreign' => 'setDescriptionForeign',
        'void_description' => 'setVoidDescription',
        'created_on' => 'setCreatedOn',
        'modified_on' => 'setModifiedOn',
        'voided_on' => 'setVoidedOn',
        'approved_on' => 'setApprovedOn',
        'transaction_no' => 'setTransactionNo',
        'note' => 'setNote',
        'template_type' => 'setTemplateType',
        'contact_name' => 'setContactName',
        'document_serial_no_prefix' => 'setDocumentSerialNoPrefix',
        'created_by' => 'setCreatedBy',
        'modified_by' => 'setModifiedBy',
        'approved_by' => 'setApprovedBy',
        'voided_by' => 'setVoidedBy',
        'gallery_id' => 'setGalleryId',
        'contact_id' => 'setContactId',
        'running_number_type' => 'setRunningNumberType',
        'fiscal_year_id' => 'setFiscalYearId',
        'reference' => 'setReference',
        'reference_id' => 'setReferenceId',
        'reference_document_type' => 'setReferenceDocumentType',
        'is_system_document' => 'setIsSystemDocument',
        'rule_compile_status' => 'setRuleCompileStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'document_serial' => 'getDocumentSerial',
        'document_type' => 'getDocumentType',
        'status' => 'getStatus',
        'document_date' => 'getDocumentDate',
        'description' => 'getDescription',
        'description_foreign' => 'getDescriptionForeign',
        'void_description' => 'getVoidDescription',
        'created_on' => 'getCreatedOn',
        'modified_on' => 'getModifiedOn',
        'voided_on' => 'getVoidedOn',
        'approved_on' => 'getApprovedOn',
        'transaction_no' => 'getTransactionNo',
        'note' => 'getNote',
        'template_type' => 'getTemplateType',
        'contact_name' => 'getContactName',
        'document_serial_no_prefix' => 'getDocumentSerialNoPrefix',
        'created_by' => 'getCreatedBy',
        'modified_by' => 'getModifiedBy',
        'approved_by' => 'getApprovedBy',
        'voided_by' => 'getVoidedBy',
        'gallery_id' => 'getGalleryId',
        'contact_id' => 'getContactId',
        'running_number_type' => 'getRunningNumberType',
        'fiscal_year_id' => 'getFiscalYearId',
        'reference' => 'getReference',
        'reference_id' => 'getReferenceId',
        'reference_document_type' => 'getReferenceDocumentType',
        'is_system_document' => 'getIsSystemDocument',
        'rule_compile_status' => 'getRuleCompileStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['document_serial'] = $data['document_serial'] ?? null;
        $this->container['document_type'] = $data['document_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['document_date'] = $data['document_date'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['description_foreign'] = $data['description_foreign'] ?? null;
        $this->container['void_description'] = $data['void_description'] ?? null;
        $this->container['created_on'] = $data['created_on'] ?? null;
        $this->container['modified_on'] = $data['modified_on'] ?? null;
        $this->container['voided_on'] = $data['voided_on'] ?? null;
        $this->container['approved_on'] = $data['approved_on'] ?? null;
        $this->container['transaction_no'] = $data['transaction_no'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['template_type'] = $data['template_type'] ?? null;
        $this->container['contact_name'] = $data['contact_name'] ?? null;
        $this->container['document_serial_no_prefix'] = $data['document_serial_no_prefix'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['modified_by'] = $data['modified_by'] ?? null;
        $this->container['approved_by'] = $data['approved_by'] ?? null;
        $this->container['voided_by'] = $data['voided_by'] ?? null;
        $this->container['gallery_id'] = $data['gallery_id'] ?? null;
        $this->container['contact_id'] = $data['contact_id'] ?? null;
        $this->container['running_number_type'] = $data['running_number_type'] ?? null;
        $this->container['fiscal_year_id'] = $data['fiscal_year_id'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['reference_document_type'] = $data['reference_document_type'] ?? null;
        $this->container['is_system_document'] = $data['is_system_document'] ?? null;
        $this->container['rule_compile_status'] = $data['rule_compile_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int|null $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets document_serial
     *
     * @return string|null
     */
    public function getDocumentSerial()
    {
        return $this->container['document_serial'];
    }

    /**
     * Sets document_serial
     *
     * @param string|null $document_serial document_serial
     *
     * @return self
     */
    public function setDocumentSerial($document_serial)
    {
        $this->container['document_serial'] = $document_serial;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \OpenAPI\Client\Model\DocumentTypes|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \OpenAPI\Client\Model\DocumentTypes|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\JournalEntryStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\JournalEntryStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets document_date
     *
     * @return \DateTime|null
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param \DateTime|null $document_date document_date
     *
     * @return self
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_foreign
     *
     * @return string|null
     */
    public function getDescriptionForeign()
    {
        return $this->container['description_foreign'];
    }

    /**
     * Sets description_foreign
     *
     * @param string|null $description_foreign description_foreign
     *
     * @return self
     */
    public function setDescriptionForeign($description_foreign)
    {
        $this->container['description_foreign'] = $description_foreign;

        return $this;
    }

    /**
     * Gets void_description
     *
     * @return string|null
     */
    public function getVoidDescription()
    {
        return $this->container['void_description'];
    }

    /**
     * Sets void_description
     *
     * @param string|null $void_description void_description
     *
     * @return self
     */
    public function setVoidDescription($void_description)
    {
        $this->container['void_description'] = $void_description;

        return $this;
    }

    /**
     * Gets created_on
     *
     * @return \DateTime|null
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     *
     * @param \DateTime|null $created_on created_on
     *
     * @return self
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets modified_on
     *
     * @return \DateTime|null
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     *
     * @param \DateTime|null $modified_on modified_on
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets voided_on
     *
     * @return \DateTime|null
     */
    public function getVoidedOn()
    {
        return $this->container['voided_on'];
    }

    /**
     * Sets voided_on
     *
     * @param \DateTime|null $voided_on voided_on
     *
     * @return self
     */
    public function setVoidedOn($voided_on)
    {
        $this->container['voided_on'] = $voided_on;

        return $this;
    }

    /**
     * Gets approved_on
     *
     * @return \DateTime|null
     */
    public function getApprovedOn()
    {
        return $this->container['approved_on'];
    }

    /**
     * Sets approved_on
     *
     * @param \DateTime|null $approved_on approved_on
     *
     * @return self
     */
    public function setApprovedOn($approved_on)
    {
        $this->container['approved_on'] = $approved_on;

        return $this;
    }

    /**
     * Gets transaction_no
     *
     * @return int|null
     */
    public function getTransactionNo()
    {
        return $this->container['transaction_no'];
    }

    /**
     * Sets transaction_no
     *
     * @param int|null $transaction_no transaction_no
     *
     * @return self
     */
    public function setTransactionNo($transaction_no)
    {
        $this->container['transaction_no'] = $transaction_no;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return \OpenAPI\Client\Model\JournalEntryTemplateType|null
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param \OpenAPI\Client\Model\JournalEntryTemplateType|null $template_type template_type
     *
     * @return self
     */
    public function setTemplateType($template_type)
    {
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string|null $contact_name contact_name
     *
     * @return self
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets document_serial_no_prefix
     *
     * @return int|null
     */
    public function getDocumentSerialNoPrefix()
    {
        return $this->container['document_serial_no_prefix'];
    }

    /**
     * Sets document_serial_no_prefix
     *
     * @param int|null $document_serial_no_prefix document_serial_no_prefix
     *
     * @return self
     */
    public function setDocumentSerialNoPrefix($document_serial_no_prefix)
    {
        $this->container['document_serial_no_prefix'] = $document_serial_no_prefix;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return int|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return int|null
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param int|null $modified_by modified_by
     *
     * @return self
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets approved_by
     *
     * @return int|null
     */
    public function getApprovedBy()
    {
        return $this->container['approved_by'];
    }

    /**
     * Sets approved_by
     *
     * @param int|null $approved_by approved_by
     *
     * @return self
     */
    public function setApprovedBy($approved_by)
    {
        $this->container['approved_by'] = $approved_by;

        return $this;
    }

    /**
     * Gets voided_by
     *
     * @return int|null
     */
    public function getVoidedBy()
    {
        return $this->container['voided_by'];
    }

    /**
     * Sets voided_by
     *
     * @param int|null $voided_by voided_by
     *
     * @return self
     */
    public function setVoidedBy($voided_by)
    {
        $this->container['voided_by'] = $voided_by;

        return $this;
    }

    /**
     * Gets gallery_id
     *
     * @return int|null
     */
    public function getGalleryId()
    {
        return $this->container['gallery_id'];
    }

    /**
     * Sets gallery_id
     *
     * @param int|null $gallery_id gallery_id
     *
     * @return self
     */
    public function setGalleryId($gallery_id)
    {
        $this->container['gallery_id'] = $gallery_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int|null $contact_id contact_id
     *
     * @return self
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

        return $this;
    }

    /**
     * Gets running_number_type
     *
     * @return OneOfRunningNumberType|null
     */
    public function getRunningNumberType()
    {
        return $this->container['running_number_type'];
    }

    /**
     * Sets running_number_type
     *
     * @param OneOfRunningNumberType|null $running_number_type running_number_type
     *
     * @return self
     */
    public function setRunningNumberType($running_number_type)
    {
        $this->container['running_number_type'] = $running_number_type;

        return $this;
    }

    /**
     * Gets fiscal_year_id
     *
     * @return int|null
     */
    public function getFiscalYearId()
    {
        return $this->container['fiscal_year_id'];
    }

    /**
     * Sets fiscal_year_id
     *
     * @param int|null $fiscal_year_id fiscal_year_id
     *
     * @return self
     */
    public function setFiscalYearId($fiscal_year_id)
    {
        $this->container['fiscal_year_id'] = $fiscal_year_id;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return int|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param int|null $reference_id reference_id
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets reference_document_type
     *
     * @return OneOfDocumentTypes|null
     */
    public function getReferenceDocumentType()
    {
        return $this->container['reference_document_type'];
    }

    /**
     * Sets reference_document_type
     *
     * @param OneOfDocumentTypes|null $reference_document_type reference_document_type
     *
     * @return self
     */
    public function setReferenceDocumentType($reference_document_type)
    {
        $this->container['reference_document_type'] = $reference_document_type;

        return $this;
    }

    /**
     * Gets is_system_document
     *
     * @return bool|null
     */
    public function getIsSystemDocument()
    {
        return $this->container['is_system_document'];
    }

    /**
     * Sets is_system_document
     *
     * @param bool|null $is_system_document is_system_document
     *
     * @return self
     */
    public function setIsSystemDocument($is_system_document)
    {
        $this->container['is_system_document'] = $is_system_document;

        return $this;
    }

    /**
     * Gets rule_compile_status
     *
     * @return \OpenAPI\Client\Model\RuleCompileStatus|null
     */
    public function getRuleCompileStatus()
    {
        return $this->container['rule_compile_status'];
    }

    /**
     * Sets rule_compile_status
     *
     * @param \OpenAPI\Client\Model\RuleCompileStatus|null $rule_compile_status rule_compile_status
     *
     * @return self
     */
    public function setRuleCompileStatus($rule_compile_status)
    {
        $this->container['rule_compile_status'] = $rule_compile_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


