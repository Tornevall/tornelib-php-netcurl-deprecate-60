<?php
/**
 * Copyright 2018 Tomas Tornevall & Tornevall Networks
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Tornevall Networks netCurl library - Yet another http- and network communicator library
 * Each class in this library has its own version numbering to keep track of where the changes are. However, there is a
 * major version too.
 *
 * @package TorneLIB
 * @deprecated Deprecated. Do not use.
 */

namespace TorneLIB;

/**
 * Class NETCURL_IP_PROTOCOLS
 *
 * @package TorneLIB
 * @version 6.1.0
 * @since 6.0.0
 * @deprecated Deprecated class. Do not use.
 */
abstract class NETCURL_IP_PROTOCOLS
{
    const PROTOCOL_NONE = 0;
    const PROTOCOL_IPV4 = 4;
    const PROTOCOL_IPV6 = 6;

    /**
     * @deprecated
     */
    const IPTYPE_NONE = 0;

    /**
     * @deprecated
     */
    const IPTYPE_V4 = 4;

    /**
     * @deprecated
     */
    const IPTYPE_V6 = 6;
}
