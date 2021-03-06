<?php

/**
 *    Copyright (C) 2015 Deciso B.V.
 *
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 *
 */

/**
 *
 * Language support, autogenerated file
 *
 */
echo gettext('Add servers to this backend. Use TAB key to complete typing.');
echo gettext('Add some randomness in the check interval between 0 and +/- 50%. A value between 2 and 5 seems to show good results. The default value is 0 (disabled).');
echo gettext('Adjust the server\'s weight relative to other servers.');
echo gettext('Allow HAProxy to automatically raise log level for non-completely successful connections to aid debugging.');
echo gettext('Avoid authentication for addresses and subnets in this list');
echo gettext('Avoid authentication for physical addresses in this list');
echo gettext('Can be specified to filter outgoing messages. By default, all messages are sent. If a level is specified, only messages with a severity at least as important as this level will be sent.');
echo gettext('Change the check buffer size (in bytes). Higher values may help find string or regex patterns in very large pages, though doing so may imply more memory and CPU usage. The default value is 16384.');
echo gettext('Choose a TCP port to be used for the local statistics page. The default value is 8822.');
echo gettext('Choose actions to be included in this backend.');
echo gettext('Choose actions to be included in this frontend.');
echo gettext('Choose an action that should be executed if the condition is true.');
echo gettext('Choose an logical operator to be used to form a condition.');
echo gettext('Choose error files to be included in this backend.');
echo gettext('Choose how to test. By using IF it tests if the condition evaluates to true. If you use UNLESS, the sense of the test is reversed.');
echo gettext('Choose one of the 24 standard syslog facilities. The default value is local0.');
echo gettext('Clients will be disconnected after this amount of inactivity. They may log in again immediately, though. Enter 0 to disable idle timeout.');
echo gettext('Clients will be disconnected after this amount of time, regardless of activity. They may log in again immediately, though. Enter 0 to disable hard timeout (not recommended unless an idle timeout is set).');
echo gettext('Collect NetFlow data on this firewall, this will automatically append localhost as NetFlow target. Please keep disabled when using a RAM disk (for size and consistency reasons).');
echo gettext('Configure listen addresses for the statistics page to enable remote access, i.e. 10.0.0.1:8080 or haproxy.example.com:8999. Use TAB key to complete typing a listen address.');
echo gettext('Configure listen addresses for this frontend, i.e. 127.0.0.1:8080 or www.example.com:443. Use TAB key to complete typing a listen address.');
echo gettext('Connections coming from (src) or going to (dst) listed countries, default selects both.');
echo gettext('Cookie name to use for stick table (if appropiate table type is selected).');
echo gettext('Countries to alert or block using GeoIP.');
echo gettext('Default option for all server entries.');
echo gettext('Default ttl');
echo gettext('Description for this ACL.');
echo gettext('Description for this Lua script.');
echo gettext('Description for this action.');
echo gettext('Description for this backend.');
echo gettext('Description for this error file.');
echo gettext('Description for this frontend.');
echo gettext('Description for this server.');
echo gettext('Description to identify this pipe.');
echo gettext('Description to identify this zone.');
echo gettext('Don\'t use port on server, use the same port as frontend receive. If check enable, require port check in server.');
echo gettext('Enable CoDel active queue management');
echo gettext('Enable HAProxy\'s statistics page.');
echo gettext('Enable SSL offloading');
echo gettext('Enable access logging.');
echo gettext('Enable insertion of the X-Forwarded-For header to requests sent to servers.');
echo gettext('Enable intrusion detection system.');
echo gettext('Enable or disable SSL communication with this server.');
echo gettext('Enable or disable collecting & providing separate statistics for each socket.');
echo gettext('Enable or disable health checking.');
echo gettext('Enable or disable logging of connections with no data.');
echo gettext('Enable or disable logging of normal, successful connections.');
echo gettext('Enable or disable session redistribution in case of connection failure.');
echo gettext('Enable or disable the HAProxy service.');
echo gettext('Enable or disable the proxy service.');
echo gettext('Enable or disable traffic management.');
echo gettext('Enable or disable verbose logging. Each log line turns into a much richer format.');
echo gettext('Enable promiscuous mode, for certain setups (like IPS with vlans), this is required to actually capture data on the physical interface.');
echo gettext('Enable ruleset');
echo gettext('Enable store logging.');
echo gettext('Enable this Lua script.');
echo gettext('Enable this backend');
echo gettext('Enable this feature');
echo gettext('Enable this fingerprint rule.');
echo gettext('Enable this frontend');
echo gettext('Enable this zone');
echo gettext('Enable to log health check status updates.');
echo gettext('Enable transparent ftp proxy mode to forward all requests for destination port 21 to the proxy server without any additional configuration.');
echo gettext('Enter a description to explain what this blacklist is intended for.');
echo gettext('Enter a description to explain what this job is intended for.');
echo gettext('Enter a filename for storing the blacklist.');
echo gettext('Enter a number followed by one of the supported suffixes "d" (days), "h" (hour), "m" (minute), "s" (seconds), "ms" (miliseconds). This configures the maximum duration of an entry in the stick-table since it was last created, refreshed or matched. The maximum duration is slightly above 24 days.');
echo gettext('Enter a number followed by one of the supported suffixes "k", "m", "g". This configures the maximum number of entries that can fit in the table. This value directly impacts memory usage. Count approximately 50 bytes per entry, plus the size of a string if any.');
echo gettext('Enter an url to fetch the blacklist from.');
echo gettext('Enter parameters for this job if required.');
echo gettext('Enter the allowed overall bandtwith in kilobits per second (leave empty to disable).');
echo gettext('Enter the allowed per host bandwidth in kilobits per second (leave empty to disable).');
echo gettext('Enter the cache memory size to use.');
echo gettext('Enter the days of the month for the job to act, can also be a comma separated list, * (each) or a range (ex. 1,20,28 or 1-28)');
echo gettext('Enter the days of the week for the job to act, can also be a comma separated list, * (each) or a range (ex. 1,2,3 or 1-3)');
echo gettext('Enter the hours for the job to act, can also be a comma separated list, * (each) or a range (ex. 10,11,12 or 10-12)');
echo gettext('Enter the maximum size (in MB) to use for SSL certificates.');
echo gettext('Enter the maxium size for downloads in kilobytes (leave empty to disable).');
echo gettext('Enter the maxium size for uploads in kilobytes (leave empty to disable).');
echo gettext('Enter the minutes for the job to act, can also be a comma separated list, * (each) or a range (ex. 10,20,30 or 10-30)');
echo gettext('Enter the months for the job to act, can also be a comma separated list, * (each) or a range (ex. 1,2,3 or 1-3)');
echo gettext('Enter the number of first-level subdirectories for the local cache (default is 16).');
echo gettext('Enter the number of first-level subdirectories for the local cache (default is 256).');
echo gettext('Enter the number of ssl certificate workers to use (sslcrtd_children).');
echo gettext('Enter the size of the preview which is sent to the ICAP server.');
echo gettext('Enter the storage size for the local cache (default is 100).');
echo gettext('Enter the url where the reqmod requests should be sent to.');
echo gettext('Enter the url where the respmod requests should be sent to.');
echo gettext('Explicit Congestion Notification');
echo gettext('Filter to use when downloading this ruleset, applies this action to all incoming lines.');
echo gettext('Grant access to HAProxy statistics page. Please provide both user and password in clear text separated by a \':\', i.e. john:secret123 or jdoe:anonymous. Use TAB key to complete adding a user.');
echo gettext('Hostname (of this machine) to redirect login page to, leave blank to use this interface IP address, otherwise make sure the client can access DNS to resolve this location. When using a SSL certificate, make sure both this name and the cert name are equal.');
echo gettext('If provided, all traffic will be transmitted over an HTTPS connection to protect against eavesdroppers.');
echo gettext('If set (default), Squid will include a Via header in requests and replies as required by RFC2616.');
echo gettext('If this checkbox is checked, you can use an ICAP server to filter or replace content.');
echo gettext('If this option is set, users can login on multiple machines at once. If disabled subsequent logins will cause machines previously logged in with the same username to be disconnected.');
echo gettext('If you enable this option, the client IP address will be sent to the ICAP server. This can be useful if you want to filter traffic based on IP addresses.');
echo gettext('If you enable this option, the username of the client will be sent to the ICAP server. This can be useful if you want to filter traffic based on usernames. Note, that authentication is required to use usernames.');
echo gettext('If you use previews, only a part of the data is sent to the ICAP server. Setting this option can improve the performance.');
echo gettext('Indicates where to send the logs. Takes an IPv4 or IPv6 address optionally followed by a colon (\':\') and a UDP port, i.e. 127.0.0.1 or 10.0.0.1:514');
echo gettext('Internal number used for this zone');
echo gettext('Interval before dropping packets (in ms), leave empty for default');
echo gettext('Minimum acceptable persistent queue delay (in ms), leave empty for default');
echo gettext('Name to identify this ACL.');
echo gettext('Name to identify this Lua script.');
echo gettext('Name to identify this action.');
echo gettext('Name to identify this backend.');
echo gettext('Name to identify this error file.');
echo gettext('Name to identify this frontend.');
echo gettext('Name to identify this server.');
echo gettext('Number of logs to keep.');
echo gettext('Paste the content of your Lua script here.');
echo gettext('Paste the content of your errorfile here. The files should not exceed the configured buffer size, which generally is 8 or 16 kB.');
echo gettext('Provide either the FQDN or the IP address of this server.');
echo gettext('Provide the TCP communication port for this server, i.e. 80 or 443.');
echo gettext('Provide the TCP communication port to use during check, i.e. 80 or 443.');
echo gettext('Rotate alert logs at provided interval.');
echo gettext('Select Authentication method');
echo gettext('Select HTTP method for health check.');
echo gettext('Select HTTP version for a HTTP health check.');
echo gettext('Select NetFlow version to use.');
echo gettext('Select authentication methods to use, leave empty for no authentication needed.');
echo gettext('Select destinations to send NetFlow data to (ip address:port, eg 192.168.0.1:2550).');
echo gettext('Select health check expression.');
echo gettext('Select health check for servers in this backend.');
echo gettext('Select if job is enabled or not');
echo gettext('Select interface(s) the ftp proxy will bind to.');
echo gettext('Select interface(s) the proxy will bind to.');
echo gettext('Select interface(s) to enable NetFlow on.');
echo gettext('Select interface(s) to enable for captive portal.');
echo gettext('Select interface(s) to use. When enabling IPS, only use physical interfaces here (no vlans etc).');
echo gettext('Select interfaces used for WAN traffic to avoid counting NAT traffic twice.');
echo gettext('Select interval (in milliseconds) between two consecutive health checks.');
echo gettext('Select one ore more ACLs to be used as condition for this action.');
echo gettext('Select the command that needs to be executed at given time frame.');
echo gettext('Select the multi-pattern matcher algorithm to use.');
echo gettext('Select type of health check.');
echo gettext('Select what to do with X-Forwarded for header.');
echo gettext('Send log data to.');
echo gettext('Set action to perform here, only used when in IPS mode.');
echo gettext('Set the default backend to use for this frontend.');
echo gettext('Set the maximum inactivity time (in milliseconds) on the client side.');
echo gettext('Set the maximum inactivity time (in milliseconds) on the server side.');
echo gettext('Set the maximum number of concurrent connections for this frontend.');
echo gettext('Set the maximum object size (default 4MB when left empty).');
echo gettext('Set the maximum time (in milliseconds) to wait for a connection attempt to a server to succeed.');
echo gettext('Set the number of retries to perform on a server after a connection failure (default is 3).');
echo gettext('Set the number of retries to perform on a server after a connection failure.');
echo gettext('Set the running mode or protocol for this frontend.');
echo gettext('Set the running mode or protocol of the backend. Usually the frontend and the backend are in the same mode.');
echo gettext('Sets the interval (in milliseconds) for running health checks on the server.');
echo gettext('Sets the maximum amount of RAM in megabytes per process usable by Lua. By default it is zero which means unlimited. It is important to set a limit to ensure that a bug in a script will not result in the system running out of memory.');
echo gettext('Sets the operation mode to use for this server.');
echo gettext('Sets the source address which will be used when connecting to the server(s).');
echo gettext('Sets the source address which will be used when connecting to the server.');
echo gettext('Specify HTTP host to use for health check. Requires HTTP/1.1.');
echo gettext('Specify HTTP request URI for health check.');
echo gettext('Specify a value to match with the action.');
echo gettext('Specify a value to match with the expression.');
echo gettext('Specify an optional maximum line length. Log lines larger than this value will be truncated before being sent. The reason is that syslog servers act differently on log line length. All servers support the default value of 1024, but some servers simply drop larger lines while others do log them.');
echo gettext('Specify the TCP port used for agent checks.');
echo gettext('Specify the domain name to present to the server for SMTP/ESMTP health checks.');
echo gettext('Specify the scheduling algorithm to use');
echo gettext('Specify the username to be used for database health checks.');
echo gettext('Suppress Squid version string info in HTTP headers and HTML error pages.');
echo gettext('The SSL fingerprint, for example "B5:E1:B3:70:5E:7C:FF:EB:92:C4:29:E5:5B:AC:2F:AE:70:17:E9:9E".');
echo gettext('The hard size limit of all queues managed by this instance, leave empty for defaults');
echo gettext('The header which should be used to send the username to the ICAP server.');
echo gettext('The maximum number of characters that will be stored in the stick table (if appropiate table type is selected).');
echo gettext('The number of bytes a queue can serve before being moved to the tail of old queues list (bytes), leave empty for defaults');
echo gettext('The number of flow queues that are created and managed, leave empty for defaults');
echo gettext('The port number where Squid sends and receives ICP queries to and from neighbor caches. Leave blank to disable (default). The standard UDP port for ICP is 3130.');
echo gettext('The port the proxy service will listen to.');
echo gettext('The port the ssl proxy service will listen to.');
echo gettext('The prompt will be displayed in the authentication request window.');
echo gettext('The total number of authenticator processes to spawn.');
echo gettext('This is the email address displayed in error messages to the users.');
echo gettext('This is the hostname to be displayed in proxy server error messages.');
echo gettext('Total bandwidth for this pipe');
echo gettext('Use custom template package for user login');
echo gettext('Use this option if your usernames need to be encoded.');
echo gettext('Use this to invert the meaning of the expression.');
echo gettext('Weight of this queue (1..100), used to prioritize within a pipe. (1 is low, 100 is high)');
echo gettext('When enabled the subnets of the selected interfaces will be added to the allow access list.');
echo gettext('connected pipe for this queue');
echo gettext('destination ip or network, examples 10.0.0.0/24, 10.0.0.1');
echo gettext('destination port number or well known name (imap,imaps, http,https,...)');
echo gettext('enable this pipe and it\'s related queues and rules');
echo gettext('enable this queue and it\'s related rules');
echo gettext('ip address of the mail host');
echo gettext('matches incoming or outgoing packets or both (default)');
echo gettext('number of dynamic queues, leave empty for default');
echo gettext('order in which the rule will be evaluated (lowest first)');
echo gettext('secondary interface, matches packets traveling to/from interface (1) to/from interface (2). can be combined with direction.');
echo gettext('select categories to use, leave empty for all. Categories are visible after initial download.');
echo gettext('source ip or network, examples 10.0.0.0/24, 10.0.0.1');
echo gettext('source port number or well known name (imap,imaps, http,https,...)');
echo gettext('target pipe or queue');
