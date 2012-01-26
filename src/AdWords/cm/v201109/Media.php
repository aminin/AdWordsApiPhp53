<?php

namespace AdWords\cm\v201109;



class Media 
{
    /**
     * ID of this media object.
     * This field can be selected using the value &quot;MediaId&quot;.This field can be filtered on.
     * This field is required and should not be {@code null} when it is contained within {@link Operator}s : SET, REMOVE.
     * @var string
     */
    public $mediaId;
    /**
     * Type of this media object. Required when using
     * {@link com.google.ads.api.services.campaignmgmt.media.MediaService#upload upload()}
     * to upload a new media file.
     * This field can be selected using the value &quot;Type&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\MediaMediaType
     */
    public $type;
    /**
     * Media reference id key
     * This field can be selected using the value &quot;ReferenceId&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $referenceId;
    /**
     * Various dimension sizes for the media.  Only applies to image media (and video media for
     * video thumbnails).
     * This field can be selected using the value &quot;Dimensions&quot;.
     * @var \AdWords\cm\v201109\Media_Size_DimensionsMapEntry
     */
    public $dimensions;
    /**
     * Urls pointing to the resized media for the given sizes.  Only applies to image media.
     * This field can be selected using the value &quot;Urls&quot;.
     * This field is read only and should not be set.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\Media_Size_StringMapEntry
     */
    public $urls;
    /**
     * The mime type of the media
     * This field can be selected using the value &quot;MimeType&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var \AdWords\cm\v201109\MediaMimeType
     */
    public $mimeType;
    /**
     * The url where the orginal media was downloaded from (or a file name).
     * This field can be selected using the value &quot;SourceUrl&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $sourceUrl;
    /**
     * The name of the media. The name can be used by clients to
     * help identify previously uploaded media.
     * This field can be selected using the value &quot;Name&quot;.This field can be filtered on.
     * @var string
     */
    public $name;
    /**
     * The size of the media file in bytes
     * This field can be selected using the value &quot;FileSize&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $fileSize;
    /**
     * Media creation date in the format YYYY-MM-DD HH:MM:SS+TZ.
     * This is not updatable and not specifiable.
     * This field can be selected using the value &quot;CreationTime&quot;.This field can be filtered on.
     * This field is read only and should not be set for following {@link Operator}s : SET, REMOVE.  If this field is sent to the API, it will be ignored.
     * @var string
     */
    public $creationTime;
    /**
     * Indicates that this instance is a subtype of Media.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $MediaType;
    private $_propertyMap = array (
        "Media.Type" => "MediaType",
    );

    /**
     * Set property with php-incompatiable name
     *
     * @param $var attribute name to set
     * @param $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        } else if (get_parent_class(__CLASS__)) {
            parent::__set($var, $value);
        }
    }

    /**
     * Get property with php-incompatiable name
     *
     * @param $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else if (get_parent_class(__CLASS__)) {
            parent::__get($var);
        } else {
            return null;
        }
    }
}