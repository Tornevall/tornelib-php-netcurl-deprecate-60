<?php

namespace TorneLIB;

/**
 * Class NETCURL_POST_DATATYPES
 * @package TorneLIB
 * @version 6.1.0
 * @since 6.0.0
 * @deprecated Failover Types. Will remove in future.
 */
abstract class NETCURL_POST_DATATYPES
{
    const DATATYPE_NOT_SET = 0;
    const DATATYPE_JSON = 1;
    const DATATYPE_SOAP = 2;
    const DATATYPE_XML = 3;
    const DATATYPE_SOAP_XML = 4;
}
