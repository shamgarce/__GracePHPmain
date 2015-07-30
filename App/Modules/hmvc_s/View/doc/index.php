<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
      <title><?php if($book['bookname']) echo "{$book['bookname']} - ";?><?=$title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    
    <link href="/assets/as_doc/style-api-v2-cbb8772a.css" rel="stylesheet" type="text/css" />
    <link href="/assets/as_doc/pikabu-22255a87.css" rel="stylesheet" type="text/css" />
    <link href="/assets/as_doc/mobile-menu-be990f4f.css" rel="stylesheet" type="text/css" />
    
    <link type="image/ico" href="/assets/images/favicon.ico" rel="icon" />
    

    <!-- script type="text/javascript" src="//use.typekit.net/njm7orv.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script -->

  </head>
  <body class="documentation documentation_v2 documentation_v2_index ">
 

    <div class="mobile-nav">
      <div class="m-pikabu-sidebar m-pikabu-left">
        <a href="#" class="close-panel icon-close"></a>
        <nav id="mobile">
          <h4>Pages</h4>
          <ul>
            <li>
              <a class="" href="/s">Home</a>
            </li>
<?php foreach($booklist as $key=>$value){?>	
            <li>
              <a class="" href="/s/doc/index/<?=$value['bookid']?>"><?=$value['bookname']?></a>
            </li>
<?php }?>

          </ul>
        </nav>
      </div>
    </div>

    <div class="m-pikabu-container">

        <header>
  <div class="wrapper-full">
    <a href="https://www.digitalocean.com" class="logo"></a>
    <ul>
      <li>
        <a class="" href="/">Home</a>
      </li>
<?php foreach($booklist as $key=>$value){?>	
            <li>
              <a class="" href="/s/doc/index/<?=$value['bookid']?>"><?=$value['bookname']?></a>
            </li>
<?php }?>

    </ul>
    <a class="m-pikabu-nav-toggle icon-navicon" data-role="left">
      <span></span>
    </a>
  </div>
</header>


      


    <a href="#" class="navicon"></a>
<nav class="sidebar">
  <ul id="spyMe" class="nav">
  
  
    <li>
    <a href="#actions">Actions</a>
      <ul class="nav">
        <li><a href="#actions">Actions</a></li>
        <li><a href="#list-all-actions">List all Actions</a></li>
        <li><a href="#retrieve-an-existing-action">Retrieve an existing Action</a></li>
      </ul>
    </li>  
  
<?php foreach($node as $key=>$value){ ?>
    <li>
      <a href="#s<?=$value['nodeid']?>"><?=$value['title']?></a>
      <ul class="nav">
      
	    <li><a href="#s<?=$value['nodeid']?>"><?=$value['title']?></a></li>
		<?php foreach($value['child'] as $k=>$v){?>
        <li><a href="#s<?=$v['nodeid']?>"><?=$v['title']?></a></li>
		<?php }?>  
      </ul>
    </li>
<?php	}?>  

    <li>
    <a href="#actions">Actions</a>
      <ul class="nav">
        <li><a href="#actions">Actions</a></li>
        <li><a href="#list-all-actions">List all Actions</a></li>
        <li><a href="#retrieve-an-existing-action">Retrieve an existing Action</a></li>
      </ul>
    </li>

  </ul>
</nav>


  <div id="big-wrap">
    <div id="inner-wrap">

        <!-- New Section : Intro -->
<div class="set category-head">
  <div class="inner-set" id="introduction">
    <div class="set-description">
      <h3>API v2 Introduction</h3>
      <p>Welcome to the DigitalOcean API documentation.</p>

      <p>The DigitalOcean API allows you to manage Droplets and resources within the DigitalOcean cloud in a simple, programmatic way using conventional HTTP requests.  The endpoints are intuitive and powerful, allowing you to easily make calls to retrieve information or to execute actions.</p>

      <p>All of the functionality that you are familiar with in the DigitalOcean control panel is also available through the API, allowing you to script the complex actions that your situation requires.</p>

      <p>The API documentation will start with a general overview about the design and technology that has been implemented, followed by reference information about specific endpoints.</p>
    </div>
    <div class="set-curl">
      <div id="languages">
        <ul>
          <li><a href="#" class="active">Curl</a></li>
          <li><a href="#">Ruby</a></li>
          <!-- <li><a href="#">Go</a></li> -->
        </ul>
      </div>

      <div class="beta">
        <p>
          We are very pleased to announce that API v2 is no longer in beta. Thank you to everyone who helped report bugs and suggest features during the beta period.
        </p>
        <p>
          <a href="https://www.digitalocean.com/company/blog/apiv2-officially-leaves-beta/">Read more on the blog...</a>
        </p>
        <!-- <h2>Libraries</h2>
        <p>Libraries are available in <a href="#">several languages</a></p>

        <h2>API Endpoint</h2>
        <p><a href="https://api.digitalocean.com">https://api.digitalocean.com</a></p> -->
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="requests">
    <div class="set-description">
      <h3>Requests</h3>
      <p>Any tool that is fluent in HTTP can communicate with the API simply by requesting the correct URI.  Requests should be made using the HTTPS protocol so that traffic is encrypted.  The interface responds to different methods depending on the action required.</p>

      <table class="pure-table pure-table-horizontal">
          <thead>
              <tr>
                  <th>Method</th>
                  <th>Usage</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>GET</td>
                  <td>
                      <p>For simple retrieval of information about your account, Droplets, or environment, you should use the <strong>GET</strong> method.  The information you request will be returned to you as a JSON object.</p>

                      <p>The attributes defined by the JSON object can be used to form additional requests.  Any request using the GET method is read-only and will not affect any of the objects you are querying.</p>
                  </td>
              </tr>
              <tr>
                  <td>DELETE</td>
                  <td>
                      <p>To destroy a resource and remove it from your account and environment, the <strong>DELETE</strong> method should be used.  This will remove the specified object if it is found.  If it is not found, the operation will return a response indicating that the object was not found.</p>

                      <p>This <a href="http://en.wikipedia.org/wiki/Idempotent#Computer_science_meaning">idempotency</a> means that you do not have to check for a resource's availability prior to issuing a delete command, the final state will be the same regardless of its existence.</p>
                  </td>
              </tr>
              <tr>
                  <td>PUT</td>
                  <td>
                      <p>To update the information about a resource in your account, the <strong>PUT</strong> method is available.</p>

                      <p>Like the DELETE Method, the PUT method is idempotent.  It sets the state of the target using the provided values, regardless of their current values.  Requests using the PUT method do not need to check the current attributes of the object.</p>
                  </td>
              </tr>
              <tr>
                  <td>POST</td>
                  <td>
                      <p>To create a new object, your request should specify the <strong>POST</strong> method.</p>

                      <p>The POST request includes all of the attributes necessary to create a new object.  When you wish to create a new object, send a POST request to the target endpoint.</p>
                  </td>
              </tr>
              <tr>
                  <td>HEAD</td>
                  <td>
                      <p>Finally, to retrieve metadata information, you should use the <strong>HEAD</strong> method to get the headers.  This returns only the header of what would be returned with an associated GET request.</p>

                      <p>Response headers contain some useful information about your API access and the results that are available for your request.</p>

                      <p>For instance, the headers contain your current rate-limit value and the amount of time available until the limit resets.  It also contains metrics about the total number of objects found, pagination information, and the total content length.</p>
                  </td>
              </tr>
          </tbody>
      </table>
    </div>
    <div class="set-curl">
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="statuses">
    <div class="set-description">
      <h3>HTTP Statuses</h3>
      <p>Along with the HTTP methods that the API responds to, it will also return standard HTTP statuses, including error codes. </p>

      <p>In the event of a problem, the status will contain the error code, while the body of the response will usually contain additional information about the problem that was encountered.</p>

      <p>In general, if the status returned is in the 200 range, it indicates that the request was fulfilled successfully and that no error was encountered.</p>

      <p>Return codes in the 400 range typically indicate that there was an issue with the request that was sent.  Among other things, this could mean that you did not authenticate correctly, that you are requesting an action that you do not have authorization for, that the object you are requesting does not exist, or that your request is malformed.</p>

      <p>If you receive a status in the 500 range, this generally indicates a server-side problem.  This means that we are having an issue on our end and cannot fulfill your request currently.</p>
    </div>
    <div class="set-curl">
      <h3>HTTP Statuses</h3>
      <div class="block">
        <h4>EXAMPLE ERROR RESPONSE</h4>
        <pre><code>
HTTP/1.1 403 Forbidden
{
  "id":       "forbidden",
  "message":  "You do not have access for the attempted action."
}</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="responses">
    <div class="set-description">
      <h3>Responses</h3>
      <p>When a request is successful, a response body will typically be sent back in the form of a JSON object.  An exception to this is when a DELETE request is processed, which will result in a successful HTTP 204 status and an empty response body.</p>

      <p>Inside of this JSON object, the resource root that was the target of the request will be set as the key.  This will be the singular form of the word if the request operated on a single object, and the plural form of the word if a collection was processed.</p>

      <p>For example, if you send a GET request to <code>/v2/droplets/$DROPLET_ID</code> you will get back an object with a key called "<code>droplet</code>".  However, if you send the GET request to the general collection at <code>/v2/droplets</code>, you will get back an object with a key called "<code>droplets</code>".</p>

      <p>The value of these keys will generally be a JSON object for a request on a single object and an array of objects for a request on a collection of objects.</p>
    </div>
    <div class="set-curl">
      <h3>Responses</h3>
      <div class="block">
        <h4>Response for a Single Object</h4>
        <pre><code>{
    "droplet": {
        "name": "example.com"
        . . .
    }
}</code></pre>
      </div>
      <div class="block">
        <h4>Response for an Object Collection</h4>
        <pre><code>{
    "droplets": [
        {
            "name": "example.com"
            . . .
        },
        {
            "name": "second.com"
            . . .
        }
    ]
}</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="meta">
    <div class="set-description">
      <h3>Meta</h3>
      <p>In addition to the main resource root, the response may also contain a <code>meta</code> object.  This object contains information about the response itself.</p>

      <p>The <code>meta</code> object contains a <code>total</code> key that is set to the total number of objects returned by the request.  This has implications on the <code>links</code> object and pagination.</p>

      <p>The <code>meta</code> object will only be displayed when it has a value.  Currently, the <code>meta</code> object will have a value when a request is made on a collection (like <code>droplets</code> or <code>domains</code>).</p>
    </div>
    <div class="set-curl">
      <h3>Meta</h3>
      <div class="block">
        <h4>Sample Meta Object</h4>
        <pre><code>{
    . . .
    "meta": {
        "total": 43
    }
    . . .
}</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="links">
    <div class="set-description">
      <h3>Links</h3>
      <p>The <code>links</code> object is returned as part of the response body when pagination is enabled.  By default, 25 objects are returned per page.  If the response contains 25 objects or fewer, no <code>links</code> object will be returned.  If the response contains more than 25 objects, the first 25 will be returned along with the <code>links</code> object.</p>

      <p>You can request a different pagination limit or force pagination by appending <code>?per_page=</code> to the request with the number of items you would like per page.  For instance, to show only two results per page, you could add <code>?per_page=2</code> to the end of your query.</p>

      <p>The <code>links</code> object contains a <code>pages</code> object.  The <code>pages</code> object, in turn, contains keys indicating the relationship of additional pages.  The values of these are the URLs of the associated pages.  The keys will be one of the following:</p>

      <ul>
              <li><strong>first</strong>: The URI of the first page of results.</li>
              <li><strong>prev</strong>: The URI of the previous sequential page of results.</li>
              <li><strong>next</strong>: The URI of the next sequential page of results.</li>
              <li><strong>last</strong>: The URI of the last page of results.</li>
      </ul>

      <p>The <code>pages</code> object will only include the links that make sense.  So for the first page of results, no <code>first</code> or <code>prev</code> links will ever be set.  This convention holds true in other situations where a link would not make sense.</p>
    </div>
    <div class="set-curl">
      <h3>Links</h3>
      <div class="block">
        <h4>Sample Links Object</h4>
        <pre><code>{
    . . .
    "links": {
        "pages": {
            "last": "https://api.digitalocean.com/v2/images?page=2",
            "next": "https://api.digitalocean.com/v2/images?page=2"
        }
    }
    . . .
}</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="rate-limit">
    <div class="set-description">
      <h3>Rate Limit</h3>
      <p>The number of requests that can be made through the API is currently limited to 5,000 per hour per OAuth token.</p>

      <p>The rate limiting information is contained within the response headers of each request.  The relevant headers are:</p>

      <ul>
          <li><strong>RateLimit-Limit</strong>: The number of requests that can be made per hour.</li>
          <li><strong>RateLimit-Remaining</strong>: The number of requests that remain before you hit your request limit.  See the information below for how the request limits expire.</li>
          <li><strong>RateLimit-Reset</strong>: This represents the time when the oldest request will expire.  The value is given in <a href="http://en.wikipedia.org/wiki/Unix_time">Unix epoch time</a>.  See below for more information about how request limits expire.</li>
      </ul>

      <p>As long as the <code>RateLimit-Remaining</code> count is above zero, you will be able to make additional requests.</p>

      <p>The way that a request expires and is removed from the current limit count is important to understand.  Rather than counting all of the requests for an hour and resetting the <code>RateLimit-Remaining</code> value at the end of the hour, each request instead has its own timer.</p>

      <p>This means that each request contributes toward the <code>RateLimit-Remaining</code> count for one complete hour after the request is made.  When that request's timer runs out, it is no longer counted towards the request limit.</p>

      <p>This has implications on the meaning of the <code>RateLimit-Reset</code> header as well.  Because the entire rate limit is not reset at one time, the value of this header is set to the time when the <em>oldest</em> request will expire.</p>

      <p>Keep this in mind if you see your <code>RateLimit-Reset</code> value change, but not move an entire hour into the future.</p>

      <p>If the <code>RateLimit-Remaining</code> reaches zero, subsequent requests will receive a 429 error code until the request reset has been reached.  You can see the format of the response in the examples.</p>
    </div>
    <div class="set-curl">
      <h3>Rate Limit</h3>
      <div class="block">
        <h4>Sample Rate Limit Headers</h4>
        <pre><code>. . .
RateLimit-Limit: 1200
RateLimit-Remaining: 1193
RateLimit-Reset: 1402425459
. . .</code></pre>
      </div>
      <div class="block">
        <h4>Sample Rate Exceeded Response</h4>
        <pre><code>429 Too Many Requests
{
        id: "too_many_requests",
        message: "API Rate limit exceeded."
}</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="curl">
    <div class="set-description">
      <h3>Curl Examples</h3>
      <p>Throughout this document, some example API requests will be given using the <code>curl</code> command.  This will allow us to demonstrate the various endpoints in a simple, textual format.</p>

      <p>The names of account-specific references (like Droplet IDs, for instance) will be represented by variables.  For instance, a Droplet ID may be represented by a variable called <code>$DROPLET_ID</code>.  You can set the associated variables in your environment if you wish to use the examples without modification.</p>

      <p>The first variable that you should set to get started is your OAuth authorization token.  The next section will go over the details of this, but you can set an environmental variable for it now.</p>

      <p>Generate a token by going to the <a href="https://cloud.digitalocean.com/settings/applications">Apps &amp; API</a> section of the DigitalOcean control panel.  Use an existing token if you have saved one, or generate a new token with the "Generate new token" button.  Copy the generated token and use it to set and export the TOKEN variable in your environment as the example shows.</p>

      <p>You may also wish to set some other variables now or as you go along.  For example, you may wish to set the <code>DROPLET_ID</code> variable to one of your droplet IDs since this will be used frequently in the API.</p>

      <p>If you are following along, make sure you use a Droplet ID that you control for so that your commands will execute correctly.</p>

      <p>If you need access to the headers of a response through <code>curl</code>, you can pass the <code>-i</code> flag to display the header information along with the body.  If you are only interested in the header, you can instead pass the <code>-I</code> flag, which will exclude the response body entirely.</p>
    </div>
    <div class="set-curl">
      <h3>Curl Examples</h3>
      <div class="block">
        <h4>Set and Export your OAuth Token</h4>
        <pre><code>export TOKEN=your_token_here</code></pre>
      </div>
      <div class="block">
        <h4>Set and Export a Variable</h4>
        <pre><code>export DROPLET_ID=1111111</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="authentication">
    <div class="set-description">
      <h3>OAuth Authentication</h3>
      <p>In order to interact with the DigitalOcean API, you or your application must authenticate.</p>

      <p>The DigitalOcean API handles this through OAuth, an open standard for authorization.  OAuth allows you to delegate access to your account in full or in read-only mode.</p>

      <p>You can generate an OAuth token by visiting the <a href="https://cloud.digitalocean.com/settings/applications">Apps &amp; API</a> section of the DigitalOcean control panel for your account.</p>

      <p>An OAuth token functions as a complete authentication request.  In effect, it acts as a substitute for a username and password pair.</p>

      <p>Because of this, it is absolutely <strong>essential</strong> that you keep your OAuth tokens secure.  In fact, upon generation, the web interface will only display each token a single time in order to prevent the token from being compromised.</p>

      <h4>How to Authenticate with OAuth</h4>

      <p>There are two separate ways to authenticate using OAuth.</p>

      <p>The first option is to send a bearer authorization header with your request.  This is the preferred method of authenticating because it completes the authorization request in the header portion, away from the actual request.</p>

        <p>You can also authenticate using basic authentication.  The normal way to do this with a tool like <code>curl</code> is to use the <code>-u</code> flag which is used for passing authentication information.</p>

        <p>You then send the username and password combination delimited by a colon character.  We only have an OAuth token, so use the OAuth token as the username and leave the password field blank (make sure to include the colon character though).</p>

        <p>This is effectively the same as embedding the authentication information within the URI itself.</p>
    </div>
    <div class="set-curl">
      <h3>OAuth Authentication</h3>
      <div class="block">
        <h4>Authenticate with a Bearer Authorization Header</h4>
        <pre><code>curl -X $HTTP_METHOD -H "Authorization: Bearer $TOKEN" "https://api.digitalocean.com/v2/$OBJECT"</code></pre>
      </div>
      <div class="block">
        <h4>Authenticate with Basic Authentication</h4>
        <pre><code>curl -X $HTTP_METHOD -u "$TOKEN:" "https://api.digitalocean.com/v2/$OBJECT"</code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="parameters">
    <div class="set-description">
      <h3>Parameters</h3>
      <p>There are two different ways to pass parameters in a request with the API.</p>

      <p>When passing parameters to create or update an object, parameters should be passed as a JSON object containing the appropriate attribute names and values as key-value pairs.  When you use this format, you should specify that you are sending a JSON object in the header. This is done by setting the <code>Content-Type</code> header to <code>application/json</code>.  This ensures that your request is interpreted correctly.</p>

      <p>When passing parameters to filter a response on GET requests, parameters can be passed using standard query attributes. In this case, the parameters would be embedded into the URI itself by appending a <code>?</code> to the end of the URI and then setting each attribute with an equal sign.  Attributes can be separated with a <code>&amp;</code>. Tools like <code>curl</code> can create the appropriate URI when given parameters and values; this can also be done using the <code>-F</code> flag and then passing the key and value as an argument. The argument should take the form of a quoted string with the attribute being set to a value with an equal sign.</p>
    </div>
    <div class="set-curl">
      <h3>Parameters</h3>
      <div class="block">
        <h4>Pass Parameters as a JSON Object</h4>
        <pre><code>curl -H "Authorization: Bearer $TOKEN" \
    -H "Content-Type: application/json" \
    -d '{"name": "example.com", "ip_address": "127.0.0.1"}' \
    -X POST "https://api.digitalocean.com/v2/domains"</code></pre>
      </div>
      <div class="block">
        <h4>Pass Filter Parameters as a Query String</h4>
        <pre><code> curl -H "Authorization: Bearer $TOKEN" \
     -X GET \
     "https://api.digitalocean.com/v2/images?type=snapshot"
        </code></pre>
      </div>
    </div>
  </div>
</div>

<div class="set">
  <div class="inner-set" id="cors">
    <div class="set-description">
      <h3>Cross Origin Resource Sharing</h3>
      <p>In order to make requests to the API from other domains, the API implements Cross Origin Resource Sharing (CORS) support.</p>

      <p>CORS support is generally used to create AJAX requests outside of the domain that the request originated from.  This is necessary to implement projects like control panels utilizing the API.  This tells the browser that it can send requests to an outside domain.</p>

      <p>The procedure that the browser initiates in order to perform these actions (other than GET requests) begins by sending a "preflight" request.  This sets the <code>Origin</code> header and uses the <code>OPTIONS</code> method.  The server will reply back with the methods it allows and some of the limits it imposes.  The client then sends the actual request if it falls within the allowed constraints.</p>

      <p>This process is usually done in the background by the browser, but you can use curl to emulate this process using the example provided.  The headers that will be set to show the constraints are:</p>

      <ul>
          <li><strong>Access-Control-Allow-Origin</strong>: This is the domain that is sent by the client or browser as the origin of the request.  It is set through an <code>Origin</code> header.</li>
          <li><strong>Access-Control-Allow-Methods</strong>: This specifies the allowed options for requests from that domain.  This will generally be all available methods.</li>
          <li><strong>Access-Control-Expose-Headers</strong>: This will contain the headers that will be available to requests from the origin domain.</li>
          <li><strong>Access-Control-Max-Age</strong>: This is the length of time that the access is considered valid.  After this expires, a new preflight should be sent.</li>
          <li><strong>Access-Control-Allow-Credentials</strong>: This will be set to <code>true</code>.  It basically allows you to send your OAuth token for authentication.</li>
      </ul>

      <p>You should not need to be concerned with the details of these headers, because the browser will typically do all of the work for you.</p>
    </div>
    <div class="set-curl">
      <h3>Cross Origin Resource Sharing</h3>
      <div class="block">
        <h4>Example Preflight Request</h4>
        <pre><code>curl -I -H "Origin: https://example.com" -X OPTIONS "https://api.digitalocean.com/v2/droplets"</code></pre>
      </div>
      <div class="block">
        <h4>Example Preflight Response</h4>
        <pre><code>. . .
Access-Control-Allow-Origin: https://example.com
Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS
Access-Control-Expose-Headers: RateLimit-Limit, RateLimit-Remaining, RateLimit-Reset, Total, Link
Access-Control-Max-Age: 86400
Access-Control-Allow-Credentials: true
. . .</code></pre>
      </div>
    </div>
  </div>
</div>

  <!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="account">

    <div class="set-description">
      <h3>Account</h3>
      <p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>droplet_limit</strong></td>
            <td><em>number</em></td>
            <td>The total number of droplets the user may have</td>
          </tr>
        
          <tr>
            <td><strong>email</strong></td>
            <td><em>string</em></td>
            <td>The email the user has registered for Digital Ocean with</td>
          </tr>
        
          <tr>
            <td><strong>uuid</strong></td>
            <td><em>string (alphanumeric)</em></td>
            <td>The universal identifier for this user</td>
          </tr>
        
          <tr>
            <td><strong>email_verified</strong></td>
            <td><em>boolean</em></td>
            <td>If true, the user has verified their account via email. False otherwise.</td>
          </tr>
        
          <tr>
            <td><strong>status</strong></td>
            <td><em>string</em></td>
            <td>This value is one of "active", "warning" or "locked".</td>
          </tr>
        
          <tr>
            <td><strong>status_message</strong></td>
            <td><em>string</em></td>
            <td>A human-readable message giving more details about the status of the account.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="get-user-information">
        <div class="set-description">
          <h3>Get User Information</h3>

          <div>
            
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Get User Information</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/account"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/account&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.account.info</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.account.info' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1137
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1137
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "account": {
    "droplet_limit": 25,
    "email": "sammy@digitalocean.com",
    "uuid": "b6fr89dbf6d9156cace5f3c78dc9851d957381ef",
    "email_verified": true
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "account": {
    "droplet_limit": 25,
    "email": "sammy@digitalocean.com",
    "uuid": "b6fr89dbf6d9156cace5f3c78dc9851d957381ef",
    "email_verified": true
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="actions">

    <div class="set-description">
      <h3>Actions</h3>
      <p><p>Actions are records of events that have occurred on the resources in your account.  These can be things like rebooting a Droplet, or transferring an image to a new region.</p>
<p>An action object is created every time one of these actions is initiated.  The action object contains information about the current status of the action, start and complete timestamps, and the associated resource type and ID.</p>
<p>Every action that creates an action object is available through this endpoint.  Completed actions are not removed from this list and are always available for querying.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>A unique numeric ID that can be used to identify and reference an action.</td>
          </tr>
        
          <tr>
            <td><strong>status</strong></td>
            <td><em>string</em></td>
            <td>The current status of the action.  This can be "in-progress", "completed", or "errored".</td>
          </tr>
        
          <tr>
            <td><strong>type</strong></td>
            <td><em>string</em></td>
            <td>This is the type of action that the object represents.  For example, this could be "transfer" to represent the state of an image transfer action.</td>
          </tr>
        
          <tr>
            <td><strong>started_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td>
          </tr>
        
          <tr>
            <td><strong>completed_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td>
          </tr>
        
          <tr>
            <td><strong>resource_id</strong></td>
            <td><em>number</em></td>
            <td>A unique identifier for the resource that the action is associated with.</td>
          </tr>
        
          <tr>
            <td><strong>resource_type</strong></td>
            <td><em>string</em></td>
            <td>The type of resource that the action is associated with.</td>
          </tr>
        
          <tr>
            <td><strong>region</strong></td>
            <td><em>nullable string</em></td>
            <td>(deprecated) A slug representing the region where the action occurred.</td>
          </tr>
        
          <tr>
            <td><strong>region_slug</strong></td>
            <td><em>nullable string</em></td>
            <td>A slug representing the region where the action occurred.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-actions">
        <div class="set-description">
          <h3>List all Actions</h3>

          <div>
            <p>To list all of the actions that have been executed on the current account, send a GET request to <code>/v2/actions</code>.</p>
<p>This will be the entire list of actions taken on your account, so it will be quite large.  As with any large collection returned by the API, the results will be paginated with only 25 on each page by default.</p>
<p>The results will be returned as a JSON object with an <code>actions</code> key.  This will be set to an array filled with action objects containing the standard action attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  This can be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of action that the object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List all Actions</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/actions?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/actions?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">actions = client.actions.all
actions.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='actions = client.actions.all
actions.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1124
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1124
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "actions": [
    {
      "id": 36804636,
      "status": "completed",
      "type": "create",
      "started_at": "2014-11-14T16:29:21Z",
      "completed_at": "2014-11-14T16:30:06Z",
      "resource_id": 3164444,
      "resource_type": "droplet",
      "region": "nyc3",
      "region_slug": "nyc3"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/actions?page=159&per_page=1",
      "next": "https://api.digitalocean.com/v2/actions?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 159
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "actions": [
    {
      "id": 36804636,
      "status": "completed",
      "type": "create",
      "started_at": "2014-11-14T16:29:21Z",
      "completed_at": "2014-11-14T16:30:06Z",
      "resource_id": 3164444,
      "resource_type": "droplet",
      "region": "nyc3",
      "region_slug": "nyc3"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/actions?page=159&per_page=1",
      "next": "https://api.digitalocean.com/v2/actions?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 159
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-action">
        <div class="set-description">
          <h3>Retrieve an existing Action</h3>

          <div>
            <p>To retrieve a specific action object, send a GET request to <code>/v2/actions/$ACTION_ID</code>.</p>
<p>The result will be a JSON object with an <code>action</code> key.  This will be set to an action object containing the standard action attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  This can be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of action that the object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Action</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/actions/36804636"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/actions/36804636&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.actions.find(id: 36804636)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.actions.find(id: 36804636)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1123
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1123
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804636,
    "status": "completed",
    "type": "create",
    "started_at": "2014-11-14T16:29:21Z",
    "completed_at": "2014-11-14T16:30:06Z",
    "resource_id": 3164444,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804636,
    "status": "completed",
    "type": "create",
    "started_at": "2014-11-14T16:29:21Z",
    "completed_at": "2014-11-14T16:30:06Z",
    "resource_id": 3164444,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="domains">

    <div class="set-description">
      <h3>Domains</h3>
      <p><p>Domain resources are domain names that you have purchased from a domain name registrar that you are managing through the DigitalOcean DNS interface.</p>
<p>This resource establishes top-level control over each domain.  Actions that affect individual domain records should be taken on the [Domain Records] resource.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>name</strong></td>
            <td><em>string</em></td>
            <td>The name of the domain itself.  This should follow the standard domain format of domain.TLD.  For instance, example.com is a valid domain name.</td>
          </tr>
        
          <tr>
            <td><strong>ttl</strong></td>
            <td><em>number</em></td>
            <td>This value is the time to live for the records on this domain, in seconds.  This defines the time frame that clients can cache queried information before a refresh should be requested.</td>
          </tr>
        
          <tr>
            <td><strong>zone_file</strong></td>
            <td><em>string</em></td>
            <td>This attribute contains the complete contents of the zone file for the selected domain.  Individual domain record resources should be used to get more granular control over records.  However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-domains">
        <div class="set-description">
          <h3>List all Domains</h3>

          <div>
            <p>To retrieve a list of all of the domains in your account, send a GET request to <code>/v2/domains</code>.</p>
<p>The response will be a JSON object with a key called <code>domains</code>.  The value of this will be an array of Domain objects, each of which contain the standard domain attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The name of the domain itself.  This should follow the standard domain format of domain.TLD.  For instance, example.com is a valid domain name.</td></tr><tr><td>ttl</td><td>number</td><td>This value is the time to live for the records on this domain, in seconds.  This defines the time frame that clients can cache queried information before a refresh should be requested.</td></tr><tr><td>zone_file</td><td>string</td><td>This attribute contains the complete contents of the zone file for the selected domain.  Individual domain record resources should be used to get more granular control over records.  However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List all Domains</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/domains"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/domains&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">domains = client.domains.all
domains.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='domains = client.domains.all
domains.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1115
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1115
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domains": [
    {
      "name": "digitaloceanisthebombdiggity.com",
      "ttl": 1800,
      "zone_file": "$ORIGIN digitaloceanisthebombdiggity.com.\n$TTL 1800\ndigitaloceanisthebombdiggity.com. IN SOA ns1.digitalocean.com. hostmaster.digitaloceanisthebombdiggity.com. 1415982609 10800 3600 604800 1800\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns1.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns2.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns3.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN A 1.2.3.4\n"
    }
  ],
  "links": {
  },
  "meta": {
    "total": 1
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domains": [
    {
      "name": "digitaloceanisthebombdiggity.com",
      "ttl": 1800,
      "zone_file": "$ORIGIN digitaloceanisthebombdiggity.com.\n$TTL 1800\ndigitaloceanisthebombdiggity.com. IN SOA ns1.digitalocean.com. hostmaster.digitaloceanisthebombdiggity.com. 1415982609 10800 3600 604800 1800\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns1.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns2.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns3.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN A 1.2.3.4\n"
    }
  ],
  "links": {
  },
  "meta": {
    "total": 1
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="create-a-new-domain">
        <div class="set-description">
          <h3>Create a new Domain</h3>

          <div>
            <p>To create a new domain, send a POST request to <code>/v2/domains</code>.  Set the "name" attribute to the domain name you are adding.  Set the "ip_address" attribute to the IP address you want to point the domain to.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The domain name to add to the DigitalOcean DNS management interface. The name must be unique in DigitalOcean&#39;s DNS system. The request will fail if the name has already been taken.</td><td>true</td></tr><tr><td>ip_address</td><td>string</td><td>This attribute contains the IP address you want the domain to point to.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>domain</code>.  The value of this will be an object that contains the standard attributes associated with a domain:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The name of the domain itself.  This should follow the standard domain format of domain.TLD.  For instance, example.com is a valid domain name.</td></tr><tr><td>ttl</td><td>number</td><td>This value is the time to live for the records on this domain, in seconds.  This defines the time frame that clients can cache queried information before a refresh should be requested.</td></tr><tr><td>zone_file</td><td>string</td><td>This attribute contains the complete contents of the zone file for the selected domain.  Individual domain record resources should be used to get more granular control over records.  However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.</td></tr></tbody></table>
<p>Keep in mind that, upon creation, the <code>zone_file</code> field will have a value of <code>null</code> until a zone file is generated and propagated through an automatic process on the DigitalOcean servers.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Create a new Domain</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"name":"digitaloceanisthebombdiggity.com","ip_address":"1.2.3.4"}' "https://api.digitalocean.com/v2/domains"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;name&quot;:&quot;digitaloceanisthebombdiggity.com&quot;,&quot;ip_address&quot;:&quot;1.2.3.4&quot;}&#39; &quot;https://api.digitalocean.com/v2/domains&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">domain = DropletKit::Domain.new(name: 'digitaloceanisthebombdiggity.com', ip_address: '1.2.3.4')
client.domains.create(domain)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='domain = DropletKit::Domain.new(name: &#39;digitaloceanisthebombdiggity.com&#39;, ip_address: &#39;1.2.3.4&#39;)
client.domains.create(domain)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "name": "digitaloceanisthebombdiggity.com",
  "ip_address": "1.2.3.4"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "name": "digitaloceanisthebombdiggity.com",
  "ip_address": "1.2.3.4"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1113
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1113
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domain": {
    "name": "digitaloceanisthebombdiggity.com",
    "ttl": 1800,
    "zone_file": null
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domain": {
    "name": "digitaloceanisthebombdiggity.com",
    "ttl": 1800,
    "zone_file": null
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-domain">
        <div class="set-description">
          <h3>Retrieve an existing Domain</h3>

          <div>
            <p>To get details about a specific domain, send a GET request to <code>/v2/domains/$DOMAIN_NAME</code>. </p>
<p>The response will be a JSON object with a key called <code>domain</code>.  The value of this will be an object that contains the standard attributes defined for a domain:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The name of the domain itself.  This should follow the standard domain format of domain.TLD.  For instance, example.com is a valid domain name.</td></tr><tr><td>ttl</td><td>number</td><td>This value is the time to live for the records on this domain, in seconds.  This defines the time frame that clients can cache queried information before a refresh should be requested.</td></tr><tr><td>zone_file</td><td>string</td><td>This attribute contains the complete contents of the zone file for the selected domain.  Individual domain record resources should be used to get more granular control over records.  However, this attribute can also be used to get information about the SOA record, which is created automatically and is not accessible as an individual record resource.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Domain</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.domains.find(name: 'digitaloceanisthebombdiggity.com')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.domains.find(name: &#39;digitaloceanisthebombdiggity.com&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1112
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1112
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domain": {
    "name": "digitaloceanisthebombdiggity.com",
    "ttl": 1800,
    "zone_file": "$ORIGIN digitaloceanisthebombdiggity.com.\n$TTL 1800\ndigitaloceanisthebombdiggity.com. IN SOA ns1.digitalocean.com. hostmaster.digitaloceanisthebombdiggity.com. 1415982611 10800 3600 604800 1800\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns1.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns2.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns3.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN A 1.2.3.4\n"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domain": {
    "name": "digitaloceanisthebombdiggity.com",
    "ttl": 1800,
    "zone_file": "$ORIGIN digitaloceanisthebombdiggity.com.\n$TTL 1800\ndigitaloceanisthebombdiggity.com. IN SOA ns1.digitalocean.com. hostmaster.digitaloceanisthebombdiggity.com. 1415982611 10800 3600 604800 1800\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns1.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns2.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN NS ns3.digitalocean.com.\ndigitaloceanisthebombdiggity.com. 1800 IN A 1.2.3.4\n"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="delete-a-domain">
        <div class="set-description">
          <h3>Delete a Domain</h3>

          <div>
            <p>To delete a domain, send a DELETE request to <code>/v2/domains/$DOMAIN_NAME</code>.</p>
<p>The domain will be removed from your account and a response status of 204 will be returned.  This indicates a successful request with no response body.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Delete a Domain</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X DELETE -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X DELETE -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.domains.delete(name: 'digitaloceanisthebombdiggity.com')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.domains.delete(name: &#39;digitaloceanisthebombdiggity.com&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 1111
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 1111
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="domain-records">

    <div class="set-description">
      <h3>Domain Records</h3>
      <p><p>Domain record resources are used to set or retrieve information about the individual DNS records configured for a domain.  This allows you to build and manage DNS zone files by adding and modifying individual records for a domain.</p>
<p>The DigitalOcean DNS management interface allows you to configure the following DNS records:</p>
<p>There is also an additional field called <code>id</code> that is auto-assigned for each record and used as a unique identifier for requests.  Each record contains all of these attribute types.  For record types that do not utilize all fields, a value of <code>null</code> will be set for that record.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>A unique identifier for each domain record.</td>
          </tr>
        
          <tr>
            <td><strong>type</strong></td>
            <td><em>string</em></td>
            <td>The type of the DNS record (ex: A, CNAME, TXT, ...).</td>
          </tr>
        
          <tr>
            <td><strong>name</strong></td>
            <td><em>string</em></td>
            <td>The name to use for the DNS record.</td>
          </tr>
        
          <tr>
            <td><strong>data</strong></td>
            <td><em>string</em></td>
            <td>The value to use for the DNS record.</td>
          </tr>
        
          <tr>
            <td><strong>priority</strong></td>
            <td><em>nullable number</em></td>
            <td>The priority for SRV and MX records.</td>
          </tr>
        
          <tr>
            <td><strong>port</strong></td>
            <td><em>nullable number</em></td>
            <td>The port for SRV records.</td>
          </tr>
        
          <tr>
            <td><strong>weight</strong></td>
            <td><em>nullable number</em></td>
            <td>The weight for SRV records.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-domain-records">
        <div class="set-description">
          <h3>List all Domain Records</h3>

          <div>
            <p>To get a listing of all records configured for a domain, send a GET request to <code>/v2/domains/$DOMAIN_NAME/records</code>.</p>
<p>The response will be a JSON object with a key called <code>domain_records</code>.  The value of this will be an array of domain record objects, each of which contains the standard domain record attributes:</p>
<p>For attributes that are not used by a specific record type, a value of <code>null</code> will be returned.  For instance, all records other than SRV will have <code>null</code> for the  <code>weight</code> and <code>port</code> attributes.</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each domain record.</td></tr><tr><td>type</td><td>string</td><td>The type of the DNS record (ex: A, CNAME, TXT, ...).</td></tr><tr><td>name</td><td>string</td><td>The name to use for the DNS record.</td></tr><tr><td>data</td><td>string</td><td>The value to use for the DNS record.</td></tr><tr><td>priority</td><td>nullable number</td><td>The priority for SRV and MX records.</td></tr><tr><td>port</td><td>nullable number</td><td>The port for SRV records.</td></tr><tr><td>weight</td><td>nullable number</td><td>The weight for SRV records.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List all Domain Records</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">records = client.domain_records.all(for_domain: 'digitaloceanisthebombdiggity.com')
records.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='records = client.domain_records.all(for_domain: &#39;digitaloceanisthebombdiggity.com&#39;)
records.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1121
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1121
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domain_records": [
    {
      "id": 3352892,
      "type": "NS",
      "name": "@",
      "data": "ns1.digitalocean.com",
      "priority": null,
      "port": null,
      "weight": null
    },
    {
      "id": 3352893,
      "type": "NS",
      "name": "@",
      "data": "ns2.digitalocean.com",
      "priority": null,
      "port": null,
      "weight": null
    },
    {
      "id": 3352894,
      "type": "NS",
      "name": "@",
      "data": "ns3.digitalocean.com",
      "priority": null,
      "port": null,
      "weight": null
    },
    {
      "id": 3352895,
      "type": "A",
      "name": "@",
      "data": "1.2.3.4",
      "priority": null,
      "port": null,
      "weight": null
    }
  ],
  "links": {
  },
  "meta": {
    "total": 4
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domain_records": [
    {
      "id": 3352892,
      "type": "NS",
      "name": "@",
      "data": "ns1.digitalocean.com",
      "priority": null,
      "port": null,
      "weight": null
    },
    {
      "id": 3352893,
      "type": "NS",
      "name": "@",
      "data": "ns2.digitalocean.com",
      "priority": null,
      "port": null,
      "weight": null
    },
    {
      "id": 3352894,
      "type": "NS",
      "name": "@",
      "data": "ns3.digitalocean.com",
      "priority": null,
      "port": null,
      "weight": null
    },
    {
      "id": 3352895,
      "type": "A",
      "name": "@",
      "data": "1.2.3.4",
      "priority": null,
      "port": null,
      "weight": null
    }
  ],
  "links": {
  },
  "meta": {
    "total": 4
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="create-a-new-domain-record">
        <div class="set-description">
          <h3>Create a new Domain Record</h3>

          <div>
            <p>To create a new record to a domain, send a POST request to <code>/v2/domains/$DOMAIN_NAME/records</code>. </p>
<p>The request must include all of the required fields for the domain record type being added. The required attributes per domain record type:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>The record type (A, MX, CNAME, etc).</td><td>All Records</td></tr><tr><td>name</td><td>string</td><td>The host name, alias, or service being defined by the record.</td><td>A, AAAA, CNAME, TXT, SRV</td></tr><tr><td>data</td><td>string</td><td>Variable data depending on record type. See the [Domain Records]() section for more detail on each record type.</td><td>A, AAAA, CNAME, MX, TXT, SRV, NS</td></tr><tr><td>priority</td><td>nullable number</td><td>The priority of the host (for SRV and MX records. null otherwise).</td><td>MX, SRV</td></tr><tr><td>port</td><td>nullable number</td><td>The port that the service is accessible on (for SRV records only. null otherwise).</td><td>SRV</td></tr><tr><td>weight</td><td>nullable number</td><td>The weight of records with the same priority (for SRV records only. null otherwise).</td><td>SRV</td></tr></tbody></table>
<p>The response body will be a JSON object with a key called <code>domain_record</code>.  The value of this will be an object representing the new record.  Attributes that are not applicable for the record type will be set to <code>null</code>.  An <code>id</code> attribute is generated for each record as part of the object.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each domain record.</td></tr><tr><td>type</td><td>string</td><td>The type of the DNS record (ex: A, CNAME, TXT, ...).</td></tr><tr><td>name</td><td>string</td><td>The name to use for the DNS record.</td></tr><tr><td>data</td><td>string</td><td>The value to use for the DNS record.</td></tr><tr><td>priority</td><td>nullable number</td><td>The priority for SRV and MX records.</td></tr><tr><td>port</td><td>nullable number</td><td>The port for SRV records.</td></tr><tr><td>weight</td><td>nullable number</td><td>The weight for SRV records.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Create a new Domain Record</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"A","name":"customdomainrecord.com","data":"162.10.66.0","priority":null,"port":null,"weight":null}' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;A&quot;,&quot;name&quot;:&quot;customdomainrecord.com&quot;,&quot;data&quot;:&quot;162.10.66.0&quot;,&quot;priority&quot;:null,&quot;port&quot;:null,&quot;weight&quot;:null}&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">record = DropletKit::DomainRecord.new(type: 'A', name: 'customdomainrecord.com', data: '162.10.66.0')
client.domain_records.create(record, for_domain: 'digitaloceanisthebombdiggity.com')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='record = DropletKit::DomainRecord.new(type: &#39;A&#39;, name: &#39;customdomainrecord.com&#39;, data: &#39;162.10.66.0&#39;)
client.domain_records.create(record, for_domain: &#39;digitaloceanisthebombdiggity.com&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "A",
  "name": "customdomainrecord.com",
  "data": "162.10.66.0",
  "priority": null,
  "port": null,
  "weight": null
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "A",
  "name": "customdomainrecord.com",
  "data": "162.10.66.0",
  "priority": null,
  "port": null,
  "weight": null
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1120
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1120
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domain_record": {
    "id": 3352896,
    "type": "A",
    "name": "customdomainrecord.com",
    "data": "162.10.66.0",
    "priority": null,
    "port": null,
    "weight": null
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domain_record": {
    "id": 3352896,
    "type": "A",
    "name": "customdomainrecord.com",
    "data": "162.10.66.0",
    "priority": null,
    "port": null,
    "weight": null
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-domain-record">
        <div class="set-description">
          <h3>Retrieve an existing Domain Record</h3>

          <div>
            <p>To retrieve a specific domain record, send a GET request to <code>/v2/domains/$DOMAIN_NAME/records/$RECORD_ID</code>.</p>
<p>The response will be a JSON object with a key called domain_record. The value of this will be an object that contains all of the standard domain record attributes:</p>

          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each domain record.</td></tr><tr><td>type</td><td>string</td><td>The type of the DNS record (ex: A, CNAME, TXT, ...).</td></tr><tr><td>name</td><td>string</td><td>The name to use for the DNS record.</td></tr><tr><td>data</td><td>string</td><td>The value to use for the DNS record.</td></tr><tr><td>priority</td><td>nullable number</td><td>The priority for SRV and MX records.</td></tr><tr><td>port</td><td>nullable number</td><td>The port for SRV records.</td></tr><tr><td>weight</td><td>nullable number</td><td>The weight for SRV records.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Domain Record</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records/3352896"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records/3352896&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.domain_records.find(for_domain: 'digitaloceanisthebombdiggity.com', id: 3352896)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.domain_records.find(for_domain: &#39;digitaloceanisthebombdiggity.com&#39;, id: 3352896)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1119
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1119
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domain_record": {
    "id": 3352896,
    "type": "A",
    "name": "customdomainrecord.com",
    "data": "162.10.66.0",
    "priority": null,
    "port": null,
    "weight": null
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domain_record": {
    "id": 3352896,
    "type": "A",
    "name": "customdomainrecord.com",
    "data": "162.10.66.0",
    "priority": null,
    "port": null,
    "weight": null
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="update-a-domain-record">
        <div class="set-description">
          <h3>Update a Domain Record</h3>

          <div>
            <p>To update an existing record, send a PUT request to <code>/v2/domains/$DOMAIN_NAME/records/$RECORD_ID</code>.  Any attribute valid for the record type can be set to a new value for the record.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>The record type (A, MX, CNAME, etc).</td><td>All Records</td></tr><tr><td>name</td><td>string</td><td>The host name, alias, or service being defined by the record.</td><td>A, AAAA, CNAME, TXT, SRV</td></tr><tr><td>data</td><td>string</td><td>Variable data depending on record type. See the [Domain Records]() section for more detail on each record type.</td><td>A, AAAA, CNAME, MX, TXT, SRV, NS</td></tr><tr><td>priority</td><td>nullable number</td><td>The priority of the host (for SRV and MX records. null otherwise).</td><td>MX, SRV</td></tr><tr><td>port</td><td>nullable number</td><td>The port that the service is accessible on (for SRV records only. null otherwise).</td><td>SRV</td></tr><tr><td>weight</td><td>nullable number</td><td>The weight of records with the same priority (for SRV records only. null otherwise).</td><td>SRV</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>domain_record</code>.  The value of this will be a domain record object which contains the standard domain record attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each domain record.</td></tr><tr><td>type</td><td>string</td><td>The type of the DNS record (ex: A, CNAME, TXT, ...).</td></tr><tr><td>name</td><td>string</td><td>The name to use for the DNS record.</td></tr><tr><td>data</td><td>string</td><td>The value to use for the DNS record.</td></tr><tr><td>priority</td><td>nullable number</td><td>The priority for SRV and MX records.</td></tr><tr><td>port</td><td>nullable number</td><td>The port for SRV records.</td></tr><tr><td>weight</td><td>nullable number</td><td>The weight for SRV records.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Update a Domain Record</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X PUT -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"name":"updated-record-name.com"}' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records/3352896"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X PUT -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;name&quot;:&quot;updated-record-name.com&quot;}&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records/3352896&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">record = DropletKit::DomainRecord.new(name: 'updated-record-name.com')
client.domain_records.update(record, for_domain: 'digitaloceanisthebombdiggity.com', id: 3352896)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='record = DropletKit::DomainRecord.new(name: &#39;updated-record-name.com&#39;)
client.domain_records.update(record, for_domain: &#39;digitaloceanisthebombdiggity.com&#39;, id: 3352896)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "name": "updated-record-name.com"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "name": "updated-record-name.com"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1118
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 1118
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "domain_record": {
    "id": 3352896,
    "type": "A",
    "name": "updated-record-name.com",
    "data": "162.10.66.0",
    "priority": null,
    "port": null,
    "weight": null
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "domain_record": {
    "id": 3352896,
    "type": "A",
    "name": "updated-record-name.com",
    "data": "162.10.66.0",
    "priority": null,
    "port": null,
    "weight": null
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="delete-a-domain-record">
        <div class="set-description">
          <h3>Delete a Domain Record</h3>

          <div>
            <p>To delete a record for a domain, send a DELETE request to <code>/v2/domains/$DOMAIN_NAME/records/$RECORD_ID</code>.</p>
<p>The record will be deleted and the response status will be a 204.  This indicates a successful request with no body returned.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Delete a Domain Record</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X DELETE -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records/3352896"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X DELETE -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/domains/digitaloceanisthebombdiggity.com/records/3352896&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.domain_records.delete(for_domain: 'digitaloceanisthebombdiggity.com', id: 3352896)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.domain_records.delete(for_domain: &#39;digitaloceanisthebombdiggity.com&#39;, id: 3352896)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 1117
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 1117
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="droplets">

    <div class="set-description">
      <h3>Droplets</h3>
      <p><p>A Droplet is a DigitalOcean virtual machine.  By sending requests to the Droplet endpoint, you can list, create, or delete Droplets.</p>
<p>Some of the attributes will have an object value.  The <code>region</code> and <code>image</code> objects will all contain the standard attributes of their associated types.  Find more information about each of these objects in their respective sections.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>A unique identifier for each Droplet instance.  This is automatically generated upon Droplet creation.</td>
          </tr>
        
          <tr>
            <td><strong>name</strong></td>
            <td><em>string</em></td>
            <td>The human-readable name set for the Droplet instance.</td>
          </tr>
        
          <tr>
            <td><strong>memory</strong></td>
            <td><em>number</em></td>
            <td>Memory of the Droplet in megabytes.</td>
          </tr>
        
          <tr>
            <td><strong>vcpus</strong></td>
            <td><em>number</em></td>
            <td>The number of virtual CPUs.</td>
          </tr>
        
          <tr>
            <td><strong>disk</strong></td>
            <td><em>number</em></td>
            <td>The size of the Droplet's disk in gigabytes.</td>
          </tr>
        
          <tr>
            <td><strong>locked</strong></td>
            <td><em>boolean</em></td>
            <td>A boolean value indicating whether the Droplet has been locked, preventing actions by users.</td>
          </tr>
        
          <tr>
            <td><strong>created_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the Droplet was created.</td>
          </tr>
        
          <tr>
            <td><strong>status</strong></td>
            <td><em>string</em></td>
            <td>A status string indicating the state of the Droplet instance.  This may be "new", "active", "off", or "archive".</td>
          </tr>
        
          <tr>
            <td><strong>backup_ids</strong></td>
            <td><em>array</em></td>
            <td>An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.</td>
          </tr>
        
          <tr>
            <td><strong>snapshot_ids</strong></td>
            <td><em>array</em></td>
            <td>An array of snapshot IDs of any snapshots created from the Droplet instance.</td>
          </tr>
        
          <tr>
            <td><strong>features</strong></td>
            <td><em>array</em></td>
            <td>An array of features enabled on this Droplet.</td>
          </tr>
        
          <tr>
            <td><strong>region</strong></td>
            <td><em>object</em></td>
            <td>The region that the Droplet instance is deployed in.  When setting a region, the value should be the slug identifier for the region.  When you query a Droplet, the entire region object will be returned.</td>
          </tr>
        
          <tr>
            <td><strong>image</strong></td>
            <td><em>object</em></td>
            <td>The base image used to create the Droplet instance.  When setting an image, the value is set to the image id or slug.  When querying the Droplet, the entire image object will be returned.</td>
          </tr>
        
          <tr>
            <td><strong>size</strong></td>
            <td><em>object</em></td>
            <td>The current size object describing the Droplet. When setting a size, the value is set to the size slug.  When querying the Droplet, the entire size object will be returned. Note that the disk volume of a droplet may not match the size's disk due to Droplet resize actions. The disk attribute on the Droplet should always be referenced.</td>
          </tr>
        
          <tr>
            <td><strong>size_slug</strong></td>
            <td><em>string</em></td>
            <td>The unique slug identifier for the size of this Droplet.</td>
          </tr>
        
          <tr>
            <td><strong>networks</strong></td>
            <td><em>object</em></td>
            <td>The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6.  The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet.  These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.</td>
          </tr>
        
          <tr>
            <td><strong>kernel</strong></td>
            <td><em>nullable object</em></td>
            <td>The current kernel. This will initially be set to the kernel of the base image when the Droplet is created.</td>
          </tr>
        
          <tr>
            <td><strong>next_backup_window</strong></td>
            <td><em>nullable object</em></td>
            <td>The details of the Droplet's backups feature, if backups are configured for the Droplet. This object contains keys for the start and end times of the window during which the backup will start.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="create-a-new-droplet">
        <div class="set-description">
          <h3>Create a new Droplet</h3>

          <div>
            <p>To create a new Droplet, send a POST request to <code>/v2/droplets</code>.</p>
<p>The attribute values that must be set to successfully create a Droplet are:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>name</td><td>String</td><td>The human-readable string you wish to use when displaying the Droplet name. The name, if set to a domain name managed in the DigitalOcean DNS management system, will configure a PTR record for the Droplet. The name set during creation will also determine the hostname for the Droplet in its internal configuration.</td><td>true</td></tr><tr><td>region</td><td>String</td><td>The unique slug identifier for the region that you wish to deploy in.</td><td>true</td></tr><tr><td>size</td><td>String</td><td>The unique slug identifier for the size that you wish to select for this Droplet.</td><td>true</td></tr><tr><td>image</td><td>number (if using an image ID), or String (if using a public image slug)</td><td>The image ID of a public or private image, or the unique slug identifier for a public image. This image will be the base image for your Droplet.</td><td>true</td></tr><tr><td>ssh_keys</td><td>Array</td><td>An array containing the IDs or fingerprints of the SSH keys that you wish to embed in the Droplet&#39;s root account upon creation.</td><td text="false"></td></tr><tr><td>backups</td><td>Boolean</td><td>A boolean indicating whether automated backups should be enabled for the Droplet. Automated backups can only be enabled when the Droplet is created.</td><td text="false"></td></tr><tr><td>ipv6</td><td>Boolean</td><td>A boolean indicating whether IPv6 is enabled on the Droplet.</td><td text="false"></td></tr><tr><td>private_networking</td><td>Boolean</td><td>A boolean indicating whether private networking is enabled for the Droplet. Private networking is currently only available in certain regions.</td><td text="false"></td></tr><tr><td>user_data</td><td>String</td><td>A string of the desired User Data for the Droplet. User Data is currently only available in regions with metadata listed in their features.</td><td text="false"></td></tr></tbody></table>
<p>A Droplet will be created using the provided information.  The response body will contain a JSON object with a key called <code>droplet</code>.  The value will be an object containing the standard attributes for your new Droplet:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet instance.  This is automatically generated upon Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>The human-readable name set for the Droplet instance.</td></tr><tr><td>memory</td><td>number</td><td>Memory of the Droplet in megabytes.</td></tr><tr><td>vcpus</td><td>number</td><td>The number of virtual CPUs.</td></tr><tr><td>disk</td><td>number</td><td>The size of the Droplet&#39;s disk in gigabytes.</td></tr><tr><td>locked</td><td>boolean</td><td>A boolean value indicating whether the Droplet has been locked, preventing actions by users.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Droplet was created.</td></tr><tr><td>status</td><td>string</td><td>A status string indicating the state of the Droplet instance.  This may be &quot;new&quot;, &quot;active&quot;, &quot;off&quot;, or &quot;archive&quot;.</td></tr><tr><td>backup_ids</td><td>array</td><td>An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.</td></tr><tr><td>snapshot_ids</td><td>array</td><td>An array of snapshot IDs of any snapshots created from the Droplet instance.</td></tr><tr><td>features</td><td>array</td><td>An array of features enabled on this Droplet.</td></tr><tr><td>region</td><td>object</td><td>The region that the Droplet instance is deployed in.  When setting a region, the value should be the slug identifier for the region.  When you query a Droplet, the entire region object will be returned.</td></tr><tr><td>image</td><td>object</td><td>The base image used to create the Droplet instance.  When setting an image, the value is set to the image id or slug.  When querying the Droplet, the entire image object will be returned.</td></tr><tr><td>size</td><td>object</td><td>The current size object describing the Droplet. When setting a size, the value is set to the size slug.  When querying the Droplet, the entire size object will be returned. Note that the disk volume of a droplet may not match the size&#39;s disk due to Droplet resize actions. The disk attribute on the Droplet should always be referenced.</td></tr><tr><td>size_slug</td><td>string</td><td>The unique slug identifier for the size of this Droplet.</td></tr><tr><td>networks</td><td>object</td><td>The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6.  The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet.  These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.</td></tr><tr><td>kernel</td><td>nullable object</td><td>The current kernel. This will initially be set to the kernel of the base image when the Droplet is created.</td></tr><tr><td>next_backup_window</td><td>nullable object</td><td>The details of the Droplet&#39;s backups feature, if backups are configured for the Droplet. This object contains keys for the start and end times of the window during which the backup will start.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Create a new Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"name":"example.com","region":"nyc3","size":"512mb","image":"ubuntu-14-04-x64","ssh_keys":null,"backups":false,"ipv6":true,"user_data":null,"private_networking":null}' "https://api.digitalocean.com/v2/droplets"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;name&quot;:&quot;example.com&quot;,&quot;region&quot;:&quot;nyc3&quot;,&quot;size&quot;:&quot;512mb&quot;,&quot;image&quot;:&quot;ubuntu-14-04-x64&quot;,&quot;ssh_keys&quot;:null,&quot;backups&quot;:false,&quot;ipv6&quot;:true,&quot;user_data&quot;:null,&quot;private_networking&quot;:null}&#39; &quot;https://api.digitalocean.com/v2/droplets&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">droplet = DropletKit::Droplet.new(name: 'example.com', region: 'nyc3', size: '512mb', image: 'ubuntu-14-04-x64', ipv6: true)
client.droplets.create(droplet)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='droplet = DropletKit::Droplet.new(name: &#39;example.com&#39;, region: &#39;nyc3&#39;, size: &#39;512mb&#39;, image: &#39;ubuntu-14-04-x64&#39;, ipv6: true)
client.droplets.create(droplet)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "name": "example.com",
  "region": "nyc3",
  "size": "512mb",
  "image": "ubuntu-14-04-x64",
  "ssh_keys": null,
  "backups": false,
  "ipv6": true,
  "user_data": null,
  "private_networking": null
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "name": "example.com",
  "region": "nyc3",
  "size": "512mb",
  "image": "ubuntu-14-04-x64",
  "ssh_keys": null,
  "backups": false,
  "ipv6": true,
  "user_data": null,
  "private_networking": null
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 202 Accepted
ratelimit-limit: 1200
ratelimit-remaining: 965
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 202 Accepted
ratelimit-limit: 1200
ratelimit-remaining: 965
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "droplet": {
    "id": 3164494,
    "name": "example.com",
    "memory": 512,
    "vcpus": 1,
    "disk": 20,
    "locked": true,
    "status": "new",
    "kernel": {
      "id": 2233,
      "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
      "version": "3.13.0-37-generic"
    },
    "created_at": "2014-11-14T16:36:31Z",
    "features": [
      "virtio"
    ],
    "backup_ids": [

    ],
    "snapshot_ids": [

    ],
    "image": {
    },
    "size": {
    },
    "size_slug": "512mb",
    "networks": {
    },
    "region": {
    }
  },
  "links": {
    "actions": [
      {
        "id": 36805096,
        "rel": "create",
        "href": "https://api.digitalocean.com/v2/actions/36805096"
      }
    ]
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "droplet": {
    "id": 3164494,
    "name": "example.com",
    "memory": 512,
    "vcpus": 1,
    "disk": 20,
    "locked": true,
    "status": "new",
    "kernel": {
      "id": 2233,
      "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
      "version": "3.13.0-37-generic"
    },
    "created_at": "2014-11-14T16:36:31Z",
    "features": [
      "virtio"
    ],
    "backup_ids": [

    ],
    "snapshot_ids": [

    ],
    "image": {
    },
    "size": {
    },
    "size_slug": "512mb",
    "networks": {
    },
    "region": {
    }
  },
  "links": {
    "actions": [
      {
        "id": 36805096,
        "rel": "create",
        "href": "https://api.digitalocean.com/v2/actions/36805096"
      }
    ]
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-droplet-by-id">
        <div class="set-description">
          <h3>Retrieve an existing Droplet by id</h3>

          <div>
            <p>To show an individual droplet, send a GET request to <code>/v2/droplets/$DROPLET_ID</code>.</p>
<p>The response will be a JSON object with a key called <code>droplet</code>.  This will be set to a JSON object that contains the Droplet's attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet instance.  This is automatically generated upon Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>The human-readable name set for the Droplet instance.</td></tr><tr><td>memory</td><td>number</td><td>Memory of the Droplet in megabytes.</td></tr><tr><td>vcpus</td><td>number</td><td>The number of virtual CPUs.</td></tr><tr><td>disk</td><td>number</td><td>The size of the Droplet&#39;s disk in gigabytes.</td></tr><tr><td>locked</td><td>boolean</td><td>A boolean value indicating whether the Droplet has been locked, preventing actions by users.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Droplet was created.</td></tr><tr><td>status</td><td>string</td><td>A status string indicating the state of the Droplet instance.  This may be &quot;new&quot;, &quot;active&quot;, &quot;off&quot;, or &quot;archive&quot;.</td></tr><tr><td>backup_ids</td><td>array</td><td>An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.</td></tr><tr><td>snapshot_ids</td><td>array</td><td>An array of snapshot IDs of any snapshots created from the Droplet instance.</td></tr><tr><td>features</td><td>array</td><td>An array of features enabled on this Droplet.</td></tr><tr><td>region</td><td>object</td><td>The region that the Droplet instance is deployed in.  When setting a region, the value should be the slug identifier for the region.  When you query a Droplet, the entire region object will be returned.</td></tr><tr><td>image</td><td>object</td><td>The base image used to create the Droplet instance.  When setting an image, the value is set to the image id or slug.  When querying the Droplet, the entire image object will be returned.</td></tr><tr><td>size</td><td>object</td><td>The current size object describing the Droplet. When setting a size, the value is set to the size slug.  When querying the Droplet, the entire size object will be returned. Note that the disk volume of a droplet may not match the size&#39;s disk due to Droplet resize actions. The disk attribute on the Droplet should always be referenced.</td></tr><tr><td>size_slug</td><td>string</td><td>The unique slug identifier for the size of this Droplet.</td></tr><tr><td>networks</td><td>object</td><td>The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6.  The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet.  These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.</td></tr><tr><td>kernel</td><td>nullable object</td><td>The current kernel. This will initially be set to the kernel of the base image when the Droplet is created.</td></tr><tr><td>next_backup_window</td><td>nullable object</td><td>The details of the Droplet&#39;s backups feature, if backups are configured for the Droplet. This object contains keys for the start and end times of the window during which the backup will start.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Droplet by id</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164494"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164494&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplets.find(id: 3164494)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplets.find(id: 3164494)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 902
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 902
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "droplet": {
    "id": 3164494,
    "name": "example.com",
    "memory": 512,
    "vcpus": 1,
    "disk": 20,
    "locked": false,
    "status": "active",
    "kernel": {
      "id": 2233,
      "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
      "version": "3.13.0-37-generic"
    },
    "created_at": "2014-11-14T16:36:31Z",
    "features": [
      "ipv6",
      "virtio"
    ],
    "backup_ids": [

    ],
    "snapshot_ids": [
      7938206
    ],
    "image": {
      "id": 6918990,
      "name": "14.04 x64",
      "distribution": "Ubuntu",
      "slug": "ubuntu-14-04-x64",
      "public": true,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
        "nyc3"
      ],
      "created_at": "2014-10-17T20:24:33Z",
      "type": "snapshot",
      "min_disk_size": 20
    },
    "size": {
    },
    "size_slug": "512mb",
    "networks": {
      "v4": [
        {
          "ip_address": "104.131.186.241",
          "netmask": "255.255.240.0",
          "gateway": "104.131.176.1",
          "type": "public"
        }
      ],
      "v6": [
        {
          "ip_address": "2604:A880:0800:0010:0000:0000:031D:2001",
          "netmask": 64,
          "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
          "type": "public"
        }
      ]
    },
    "region": {
      "name": "New York 3",
      "slug": "nyc3",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    }
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "droplet": {
    "id": 3164494,
    "name": "example.com",
    "memory": 512,
    "vcpus": 1,
    "disk": 20,
    "locked": false,
    "status": "active",
    "kernel": {
      "id": 2233,
      "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
      "version": "3.13.0-37-generic"
    },
    "created_at": "2014-11-14T16:36:31Z",
    "features": [
      "ipv6",
      "virtio"
    ],
    "backup_ids": [

    ],
    "snapshot_ids": [
      7938206
    ],
    "image": {
      "id": 6918990,
      "name": "14.04 x64",
      "distribution": "Ubuntu",
      "slug": "ubuntu-14-04-x64",
      "public": true,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
        "nyc3"
      ],
      "created_at": "2014-10-17T20:24:33Z",
      "type": "snapshot",
      "min_disk_size": 20
    },
    "size": {
    },
    "size_slug": "512mb",
    "networks": {
      "v4": [
        {
          "ip_address": "104.131.186.241",
          "netmask": "255.255.240.0",
          "gateway": "104.131.176.1",
          "type": "public"
        }
      ],
      "v6": [
        {
          "ip_address": "2604:A880:0800:0010:0000:0000:031D:2001",
          "netmask": 64,
          "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
          "type": "public"
        }
      ]
    },
    "region": {
      "name": "New York 3",
      "slug": "nyc3",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    }
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-all-droplets">
        <div class="set-description">
          <h3>List All Droplets</h3>

          <div>
            <p>To list all Droplets in your account, send a GET request to <code>/v2/droplets</code>.</p>
<p>The response body will be a JSON object with a key of <code>droplets</code>.  This will be set to an array containing objects representing each Droplet. These will contain the standard Droplet attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet instance.  This is automatically generated upon Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>The human-readable name set for the Droplet instance.</td></tr><tr><td>memory</td><td>number</td><td>Memory of the Droplet in megabytes.</td></tr><tr><td>vcpus</td><td>number</td><td>The number of virtual CPUs.</td></tr><tr><td>disk</td><td>number</td><td>The size of the Droplet&#39;s disk in gigabytes.</td></tr><tr><td>locked</td><td>boolean</td><td>A boolean value indicating whether the Droplet has been locked, preventing actions by users.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Droplet was created.</td></tr><tr><td>status</td><td>string</td><td>A status string indicating the state of the Droplet instance.  This may be &quot;new&quot;, &quot;active&quot;, &quot;off&quot;, or &quot;archive&quot;.</td></tr><tr><td>backup_ids</td><td>array</td><td>An array of backup IDs of any backups that have been taken of the Droplet instance.  Droplet backups are enabled at the time of the instance creation.</td></tr><tr><td>snapshot_ids</td><td>array</td><td>An array of snapshot IDs of any snapshots created from the Droplet instance.</td></tr><tr><td>features</td><td>array</td><td>An array of features enabled on this Droplet.</td></tr><tr><td>region</td><td>object</td><td>The region that the Droplet instance is deployed in.  When setting a region, the value should be the slug identifier for the region.  When you query a Droplet, the entire region object will be returned.</td></tr><tr><td>image</td><td>object</td><td>The base image used to create the Droplet instance.  When setting an image, the value is set to the image id or slug.  When querying the Droplet, the entire image object will be returned.</td></tr><tr><td>size</td><td>object</td><td>The current size object describing the Droplet. When setting a size, the value is set to the size slug.  When querying the Droplet, the entire size object will be returned. Note that the disk volume of a droplet may not match the size&#39;s disk due to Droplet resize actions. The disk attribute on the Droplet should always be referenced.</td></tr><tr><td>size_slug</td><td>string</td><td>The unique slug identifier for the size of this Droplet.</td></tr><tr><td>networks</td><td>object</td><td>The details of the network that are configured for the Droplet instance.  This is an object that contains keys for IPv4 and IPv6.  The value of each of these is an array that contains objects describing an individual IP resource allocated to the Droplet.  These will define attributes like the IP address, netmask, and gateway of the specific network depending on the type of network it is.</td></tr><tr><td>kernel</td><td>nullable object</td><td>The current kernel. This will initially be set to the kernel of the base image when the Droplet is created.</td></tr><tr><td>next_backup_window</td><td>nullable object</td><td>The details of the Droplet&#39;s backups feature, if backups are configured for the Droplet. This object contains keys for the start and end times of the window during which the backup will start.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List All Droplets</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">droplets = client.droplets.all
droplets.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='droplets = client.droplets.all
droplets.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 947
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 947
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "droplets": [
    {
      "id": 3164444,
      "name": "example.com",
      "memory": 512,
      "vcpus": 1,
      "disk": 20,
      "locked": false,
      "status": "active",
      "kernel": {
        "id": 2233,
        "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
        "version": "3.13.0-37-generic"
      },
      "created_at": "2014-11-14T16:29:21Z",
      "features": [
        "backups",
        "ipv6",
        "virtio"
      ],
      "backup_ids": [
        7938002
      ],
      "snapshot_ids": [

      ],
      "image": {
        "id": 6918990,
        "name": "14.04 x64",
        "distribution": "Ubuntu",
        "slug": "ubuntu-14-04-x64",
        "public": true,
        "regions": [
          "nyc1",
          "ams1",
          "sfo1",
          "nyc2",
          "ams2",
          "sgp1",
          "lon1",
          "nyc3",
          "ams3",
          "nyc3"
        ],
        "created_at": "2014-10-17T20:24:33Z",
        "type": "snapshot",
        "min_disk_size": 20
      },
      "size": {
      },
      "size_slug": "512mb",
      "networks": {
        "v4": [
          {
            "ip_address": "104.236.32.182",
            "netmask": "255.255.192.0",
            "gateway": "104.236.0.1",
            "type": "public"
          }
        ],
        "v6": [
          {
            "ip_address": "2604:A880:0800:0010:0000:0000:02DD:4001",
            "netmask": 64,
            "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
            "type": "public"
          }
        ]
      },
      "region": {
        "name": "New York 3",
        "slug": "nyc3",
        "sizes": [

        ],
        "features": [
          "virtio",
          "private_networking",
          "backups",
          "ipv6",
          "metadata"
        ],
        "available": null
      }
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/droplets?page=3&per_page=1",
      "next": "https://api.digitalocean.com/v2/droplets?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 3
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "droplets": [
    {
      "id": 3164444,
      "name": "example.com",
      "memory": 512,
      "vcpus": 1,
      "disk": 20,
      "locked": false,
      "status": "active",
      "kernel": {
        "id": 2233,
        "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
        "version": "3.13.0-37-generic"
      },
      "created_at": "2014-11-14T16:29:21Z",
      "features": [
        "backups",
        "ipv6",
        "virtio"
      ],
      "backup_ids": [
        7938002
      ],
      "snapshot_ids": [

      ],
      "image": {
        "id": 6918990,
        "name": "14.04 x64",
        "distribution": "Ubuntu",
        "slug": "ubuntu-14-04-x64",
        "public": true,
        "regions": [
          "nyc1",

          "ams1",
          "sfo1",
          "nyc2",
          "ams2",
          "sgp1",
          "lon1",
          "nyc3",
          "ams3",
          "nyc3"
        ],
        "created_at": "2014-10-17T20:24:33Z",
        "type": "snapshot",
        "min_disk_size": 20
      },
      "size": {
      },
      "size_slug": "512mb",
      "networks": {
        "v4": [
          {
            "ip_address": "104.236.32.182",
            "netmask": "255.255.192.0",
            "gateway": "104.236.0.1",
            "type": "public"
          }
        ],
        "v6": [
          {
            "ip_address": "2604:A880:0800:0010:0000:0000:02DD:4001",
            "netmask": 64,
            "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
            "type": "public"
          }
        ]
      },
      "region": {
        "name": "New York 3",
        "slug": "nyc3",
        "sizes": [

        ],
        "features": [
          "virtio",
          "private_networking",
          "backups",
          "ipv6",
          "metadata"
        ],
        "available": null
      }
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/droplets?page=3&per_page=1",
      "next": "https://api.digitalocean.com/v2/droplets?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 3
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-all-available-kernels-for-a-droplet">
        <div class="set-description">
          <h3>List all available Kernels for a Droplet</h3>

          <div>
            <p>To retrieve a list of all kernels available to a Dropet, send a GET request to <code>/v2/droplets/$DROPLET_ID/kernels</code>.</p>
<p>The response will be a JSON object that has a key called <code>kernels</code>.  This  will be set to an array of kernel objects, each of which contain the standard kernel attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number used to identify and reference a specific kernel.</td></tr><tr><td>name</td><td>string</td><td>The display name of the kernel. This is shown in the web UI and is generally a descriptive title for the kernel in question.</td></tr><tr><td>version</td><td>string</td><td>A standard kernel version string representing the version, patch, and release information.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List all available Kernels for a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164494/kernels?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164494/kernels?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">kernels = client.droplets.kernels(id: 3164494)
kernels.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='kernels = client.droplets.kernels(id: 3164494)
kernels.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 946
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 946
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "kernels": [
    {
      "id": 231,
      "name": "DO-recovery-static-fsck",
      "version": "3.8.0-25-generic"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/droplets/3164494/kernels?page=124&per_page=1",
      "next": "https://api.digitalocean.com/v2/droplets/3164494/kernels?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 124
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "kernels": [
    {
      "id": 231,
      "name": "DO-recovery-static-fsck",
      "version": "3.8.0-25-generic"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/droplets/3164494/kernels?page=124&per_page=1",
      "next": "https://api.digitalocean.com/v2/droplets/3164494/kernels?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 124
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-snapshots-for-a-droplet">
        <div class="set-description">
          <h3>List snapshots for a Droplet</h3>

          <div>
            <p>To retrieve the snapshots that have been created from a Droplet, sent a GET request to <code>/v2/droplets/$DROPLET_ID/snapshots</code>.</p>
<p>You will get back a JSON object that has a <code>snapshots</code> key.  This will be set to an array of snapshot objects, each of which contain the standard image attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name of the image. This is shown in the web UI and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>The base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>A boolean value that indicates whether the image in question is public. An image that is public is available to all accounts. A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>An array of the regions that the image is available in. The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List snapshots for a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164494/snapshots?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164494/snapshots?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">snapshots = client.droplets.snapshots(id: 3164494)
snapshots.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='snapshots = client.droplets.snapshots(id: 3164494)
snapshots.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 904
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 904
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "snapshots": [
    {
      "id": 7938206,
      "name": "nginx-fresh",
      "distribution": "Ubuntu",
      "slug": null,
      "public": false,
      "regions": [
        "nyc3",
        "nyc3"
      ],
      "created_at": "2014-11-14T16:37:34Z",
      "type": "snapshot",
      "min_disk_size": 20
    }
  ],
  "links": {
  },
  "meta": {
    "total": 1
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "snapshots": [
    {
      "id": 7938206,
      "name": "nginx-fresh",
      "distribution": "Ubuntu",
      "slug": null,
      "public": false,
      "regions": [
        "nyc3",
        "nyc3"
      ],
      "created_at": "2014-11-14T16:37:34Z",
      "type": "snapshot",
      "min_disk_size": 20
    }
  ],
  "links": {
  },
  "meta": {
    "total": 1
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-backups-for-a-droplet">
        <div class="set-description">
          <h3>List backups for a Droplet</h3>

          <div>
            <p>To retrieve any backups associated with a Droplet, sent a GET request to <code>/v2/droplets/$DROPLET_ID/backups</code>.</p>
<p>You will get back a JSON object that has a <code>backups</code> key.  This will be set to an array of backup objects, each of which contain the standard image attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name of the image. This is shown in the web UI and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>The base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images. These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>A boolean value that indicates whether the image in question is public. An image that is public is available to all accounts. A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>An array of the regions that the image is available in. The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List backups for a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3067509/backups"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3067509/backups&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">backups = client.droplets.backups(id: 3164494)
backups.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='backups = client.droplets.backups(id: 3164494)
backups.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "backups": [
    {
      "id": 7622989,
      "name": "example.com 2014-11-14",
      "distribution": "Ubuntu",
      "slug": null,
      "public": false,
      "regions": [
        "nyc3"
      ],
      "created_at": "2014-11-14T16:07:38Z",
      "type": "snapshot",
      "min_disk_size": 20
    }
  ],
  "meta": {
    "total": 1
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "backups": [
    {
      "id": 7622989,
      "name": "example.com 2014-11-14",
      "distribution": "Ubuntu",
      "slug": null,
      "public": false,
      "regions": [
        "nyc3"
      ],
      "created_at": "2014-11-14T16:07:38Z",
      "type": "snapshot",
      "min_disk_size": 20
    }
  ],
  "meta": {
    "total": 1
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-actions-for-a-droplet">
        <div class="set-description">
          <h3>List actions for a Droplet</h3>

          <div>
            <p>To retrieve all actions that have been executed on a Droplet, send a GET request to <code>/v2/droplets/$DROPLET_ID/actions</code>.</p>
<p>The results will be returned as a JSON object with an <code>actions</code> key.  This will be set to an array filled with action objects containing the standard action attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  This can be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of action that the object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List actions for a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164494/actions?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164494/actions?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">actions = client.droplets.actions(id: 3164494)
actions.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='actions = client.droplets.actions(id: 3164494)
actions.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "actions": [
    {
      "id": 36805187,
      "status": "completed",
      "type": "snapshot",
      "started_at": "2014-11-14T16:37:34Z",
      "completed_at": "2014-11-14T16:39:32Z",
      "resource_id": 3164494,
      "resource_type": "droplet",
      "region": "nyc3",
      "region_slug": "nyc3"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/droplets/3164494/actions?page=3&per_page=1",
      "next": "https://api.digitalocean.com/v2/droplets/3164494/actions?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 3
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "actions": [
    {
      "id": 36805187,
      "status": "completed",
      "type": "snapshot",
      "started_at": "2014-11-14T16:37:34Z",
      "completed_at": "2014-11-14T16:39:32Z",
      "resource_id": 3164494,
      "resource_type": "droplet",
      "region": "nyc3",
      "region_slug": "nyc3"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/droplets/3164494/actions?page=3&per_page=1",
      "next": "https://api.digitalocean.com/v2/droplets/3164494/actions?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 3
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="delete-a-droplet">
        <div class="set-description">
          <h3>Delete a Droplet</h3>

          <div>
            <p>To delete a Droplet, send a DELETE request to <code>/v2/droplets/$DROPLET_ID</code>.</p>
<p>No response body will be sent back, but the response code will indicate success.  Specifically, the response code will be a 204, which means that the action was successful with no returned body data.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Delete a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X DELETE -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164494"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X DELETE -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164494&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplets.delete(id: 3164494)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplets.delete(id: 3164494)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 901
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 901
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-neighbors-for-a-droplet">
        <div class="set-description">
          <h3>List Neighbors for a Droplet</h3>

          <div>
            <p>To retrieve a list of droplets that are running on the same physical server, send a GET request to <code>/v2/droplets/:id/neighbors</code></p>
<p>The results will be returned as a JSON array containing any other droplets that share the samp physical hardware.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List Neighbors for a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164494/neighbors"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164494/neighbors&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe"></code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "droplets": [
    {
      "id": 3164444,
      "name": "example.com",
      "memory": 512,
      "vcpus": 1,
      "disk": 20,
      "locked": false,
      "status": "active",
      "kernel": {
        "id": 2233,
        "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
        "version": "3.13.0-37-generic"
      },
      "created_at": "2014-11-14T16:29:21Z",
      "features": [
        "backups",
        "ipv6",
        "virtio"
      ],
      "backup_ids": [
        7938002
      ],
      "snapshot_ids": [

      ],
      "image": {
        "id": 6918990,
        "name": "14.04 x64",
        "distribution": "Ubuntu",
        "slug": "ubuntu-14-04-x64",
        "public": true,
        "regions": [
          "nyc1",
          "ams1",
          "sfo1",
          "nyc2",
          "ams2",
          "sgp1",
          "lon1",
          "nyc3",
          "ams3",
          "nyc3"
        ],
        "created_at": "2014-10-17T20:24:33Z",
        "type": "snapshot",
        "min_disk_size": 20
      },
      "size": {
      },
      "size_slug": "512mb",
      "networks": {
        "v4": [
          {
            "ip_address": "104.236.32.182",
            "netmask": "255.255.192.0",
            "gateway": "104.236.0.1",
            "type": "public"
          }
        ],
        "v6": [
          {
            "ip_address": "2604:A880:0800:0010:0000:0000:02DD:4001",
            "netmask": 64,
            "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
            "type": "public"
          }
        ]
      },
      "region": {
        "name": "New York 3",
        "slug": "nyc3",
        "sizes": [

        ],
        "features": [
          "virtio",
          "private_networking",
          "backups",
          "ipv6",
          "metadata"
        ],
        "available": null
      }
    }
  ]
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "droplets": [
    {
      "id": 3164444,
      "name": "example.com",
      "memory": 512,
      "vcpus": 1,
      "disk": 20,
      "locked": false,
      "status": "active",
      "kernel": {
        "id": 2233,
        "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
        "version": "3.13.0-37-generic"
      },
      "created_at": "2014-11-14T16:29:21Z",
      "features": [
        "backups",
        "ipv6",
        "virtio"
      ],
      "backup_ids": [
        7938002
      ],
      "snapshot_ids": [

      ],
      "image": {
        "id": 6918990,
        "name": "14.04 x64",
        "distribution": "Ubuntu",
        "slug": "ubuntu-14-04-x64",
        "public": true,
        "regions": [
          "nyc1",
          "ams1",
          "sfo1",
          "nyc2",
          "ams2",
          "sgp1",
          "lon1",
          "nyc3",
          "ams3",
          "nyc3"
        ],
        "created_at": "2014-10-17T20:24:33Z",
        "type": "snapshot",
        "min_disk_size": 20
      },
      "size": {
      },
      "size_slug": "512mb",
      "networks": {
        "v4": [
          {
            "ip_address": "104.236.32.182",
            "netmask": "255.255.192.0",
            "gateway": "104.236.0.1",
            "type": "public"
          }
        ],
        "v6": [
          {
            "ip_address": "2604:A880:0800:0010:0000:0000:02DD:4001",
            "netmask": 64,
            "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
            "type": "public"
          }
        ]
      },
      "region": {
        "name": "New York 3",
        "slug": "nyc3",
        "sizes": [

        ],
        "features": [
          "virtio",
          "private_networking",
          "backups",
          "ipv6",
          "metadata"
        ],
        "available": null
      }
    }
  ]
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-all-droplet-neighbors">
        <div class="set-description">
          <h3>List all Droplet Neighbors</h3>

          <div>
            <p>To retrieve a list of any droplets that are running on the same physical hardware, send a GET request to <code>/v2/reports/droplet_neighbors</code></p>
<p>The results will be returned as a JSON array containing more arrays, one for each set of droplets that share a physical server.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Droplet Neighbors</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/reports/droplet_neighbors"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/reports/droplet_neighbors&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe"></code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">[
  {
    "neighbors": [
      [
        {
          "id": 3164444,
          "name": "example.com",
          "memory": 512,
          "vcpus": 1,
          "disk": 20,
          "locked": false,
          "status": "active",
          "kernel": {
            "id": 2233,
            "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
            "version": "3.13.0-37-generic"
          },
          "created_at": "2014-11-14T16:29:21Z",
          "features": [
            "backups",
            "ipv6",
            "virtio"
          ],
          "backup_ids": [
            7938002
          ],
          "snapshot_ids": [

          ],
          "image": {
            "id": 6918990,
            "name": "14.04 x64",
            "distribution": "Ubuntu",
            "slug": "ubuntu-14-04-x64",
            "public": true,
            "regions": [
              "nyc1",
              "ams1",
              "sfo1",
              "nyc2",
              "ams2",
              "sgp1",
              "lon1",
              "nyc3",
              "ams3",
              "nyc3"
            ],
            "created_at": "2014-10-17T20:24:33Z",
            "type": "snapshot",
            "min_disk_size": 20
          },
          "size": {
          },
          "size_slug": "512mb",
          "networks": {
            "v4": [
              {
                "ip_address": "104.236.32.182",
                "netmask": "255.255.192.0",
                "gateway": "104.236.0.1",
                "type": "public"
              }
            ],
            "v6": [
              {
                "ip_address": "2604:A880:0800:0010:0000:0000:02DD:4001",
                "netmask": 64,
                "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
                "type": "public"
              }
            ]
          },
          "region": {
            "name": "New York 3",
            "slug": "nyc3",
            "sizes": [

            ],
            "features": [
              "virtio",
              "private_networking",
              "backups",
              "ipv6",
              "metadata"
            ],
            "available": null
          }
        }
      ]
    ]
  }
]</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='[
  {
    "neighbors": [
      [
        {
          "id": 3164444,
          "name": "example.com",
          "memory": 512,
          "vcpus": 1,
          "disk": 20,
          "locked": false,
          "status": "active",
          "kernel": {
            "id": 2233,
            "name": "Ubuntu 14.04 x64 vmlinuz-3.13.0-37-generic",
            "version": "3.13.0-37-generic"
          },
          "created_at": "2014-11-14T16:29:21Z",
          "features": [
            "backups",
            "ipv6",
            "virtio"
          ],
          "backup_ids": [
            7938002
          ],
          "snapshot_ids": [

          ],
          "image": {
            "id": 6918990,
            "name": "14.04 x64",
            "distribution": "Ubuntu",
            "slug": "ubuntu-14-04-x64",
            "public": true,
            "regions": [
              "nyc1",
              "ams1",
              "sfo1",
              "nyc2",
              "ams2",
              "sgp1",
              "lon1",
              "nyc3",
              "ams3",
              "nyc3"
            ],
            "created_at": "2014-10-17T20:24:33Z",
            "type": "snapshot",
            "min_disk_size": 20
          },
          "size": {
          },
          "size_slug": "512mb",
          "networks": {
            "v4": [
              {
                "ip_address": "104.236.32.182",
                "netmask": "255.255.192.0",
                "gateway": "104.236.0.1",
                "type": "public"
              }
            ],
            "v6": [
              {
                "ip_address": "2604:A880:0800:0010:0000:0000:02DD:4001",
                "netmask": 64,
                "gateway": "2604:A880:0800:0010:0000:0000:0000:0001",
                "type": "public"
              }
            ]
          },
          "region": {
            "name": "New York 3",
            "slug": "nyc3",
            "sizes": [

            ],
            "features": [
              "virtio",
              "private_networking",
              "backups",
              "ipv6",
              "metadata"
            ],
            "available": null
          }
        }
      ]
    ]
  }
]' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-droplet-upgrades">
        <div class="set-description">
          <h3>List Droplet Upgrades</h3>

          <div>
            <p>To retrieve a list of droplets that are scheduled to be upgraded, send a GET request to <code>/v2/droplet_upgrades</code></p>
<p>The results will be returned as a JSON array containing details about the schedule and droplet id.</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>droplet_id</td><td>number</td><td>The affected droplet&#39;s ID</td></tr><tr><td>date_of_migration</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the migration will occur for the droplet.</td></tr><tr><td>url</td><td>string</td><td>A URL pointing to the Droplet&#39;s API endpoint. This is the endpoint to be used if you want to retrieve information about the droplet.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List Droplet Upgrades</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplet_upgrades"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplet_upgrades&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe"></code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 903
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">[
  {
    "droplet_id": 123,
    "date_of_migration": "2014-12-01T12:00:00Z",
    "url": "https://api.digitalocean.com/v2/droplets/123"
  }
]</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='[
  {
    "droplet_id": 123,
    "date_of_migration": "2014-12-01T12:00:00Z",
    "url": "https://api.digitalocean.com/v2/droplets/123"
  }
]' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="droplet-actions">

    <div class="set-description">
      <h3>Droplet Actions</h3>
      <p><p>Droplet actions are tasks that can be executed on a Droplet.  These can be things like rebooting, resizing, snapshotting, etc.</p>
<p>Droplet action requests are generally targeted at one of the "actions" endpoints for a specific Droplet.  The specific actions are usually initiated by sending a POST request with the action and arguments as parameters.</p>
<p>Droplet action requests create a Droplet actions object, which can be used to get information about the status of an action. Creating a Droplet action is asynchronous: the HTTP call will return the action object before the action has finished processing on the Droplet. The current status of an action can be retrieved from either the Droplet actions endpoint or the global actions endpoint. If a Droplet action is uncompleted it may block the creation of a subsequent action for that Droplet, the locked attribute of the Droplet will be <code>true</code> and attempts to create a Droplet action will fail with a status of 422.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td>
          </tr>
        
          <tr>
            <td><strong>status</strong></td>
            <td><em>string</em></td>
            <td>The current status of the action.  The value of this attribute will be "in-progress", "completed", or "errored".</td>
          </tr>
        
          <tr>
            <td><strong>type</strong></td>
            <td><em>string</em></td>
            <td>The type of action that the event is executing (reboot, power_off, etc.).</td>
          </tr>
        
          <tr>
            <td><strong>started_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td>
          </tr>
        
          <tr>
            <td><strong>completed_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td>
          </tr>
        
          <tr>
            <td><strong>resource_id</strong></td>
            <td><em>number</em></td>
            <td>A unique identifier for the resource that the action is associated with.</td>
          </tr>
        
          <tr>
            <td><strong>resource_type</strong></td>
            <td><em>string</em></td>
            <td>The type of resource that the action is associated with.</td>
          </tr>
        
          <tr>
            <td><strong>region</strong></td>
            <td><em>nullable string</em></td>
            <td>(deprecated) A slug representing the region where the action occurred.</td>
          </tr>
        
          <tr>
            <td><strong>region_slug</strong></td>
            <td><em>nullable string</em></td>
            <td>A slug representing the region where the action occurred.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="disable-backups">
        <div class="set-description">
          <h3>Disable Backups</h3>

          <div>
            <p>To disable backups on an existing Droplet send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>disable_backups</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be disable_backups</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Disable Backups</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"disable_backups"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;disable_backups&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.disable_backups(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.disable_backups(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "disable_backups"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "disable_backups"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1099
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1099
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804745,
    "status": "in-progress",
    "type": "disable_backups",
    "started_at": "2014-11-14T16:30:56Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804745,
    "status": "in-progress",
    "type": "disable_backups",
    "started_at": "2014-11-14T16:30:56Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="reboot-a-droplet">
        <div class="set-description">
          <h3>Reboot a Droplet</h3>

          <div>
            <p>To reboot a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>reboot</code>.</p>
<p>A reboot action is an attempt to reboot the Droplet in a graceful way, similar to using the <code>reboot</code> command from the console.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be reboot</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Reboot a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"reboot"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;reboot&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.reboot(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.reboot(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "reboot"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "reboot"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1097
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1097
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804748,
    "status": "in-progress",
    "type": "reboot",
    "started_at": "2014-11-14T16:31:00Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804748,
    "status": "in-progress",
    "type": "reboot",
    "started_at": "2014-11-14T16:31:00Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="power-cycle-a-droplet">
        <div class="set-description">
          <h3>Power Cycle a Droplet</h3>

          <div>
            <p>To power cycle a Droplet (power off and then back on), send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>power_cycle</code>.</p>
<p>A powercycle action is similar to pushing the reset button on a physical machine, it's similar to booting from scratch.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be power_cycle</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Power Cycle a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"power_cycle"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;power_cycle&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.power_cycle(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.power_cycle(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "power_cycle"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "power_cycle"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1095
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1095
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804749,
    "status": "in-progress",
    "type": "power_cycle",
    "started_at": "2014-11-14T16:31:03Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804749,
    "status": "in-progress",
    "type": "power_cycle",
    "started_at": "2014-11-14T16:31:03Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="shutdown-a-droplet">
        <div class="set-description">
          <h3>Shutdown A Droplet</h3>

          <div>
            <p>To shutdown a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>. Set the "type" attribute to <code>shutdown</code>.</p>
<p>A shutdown action is an attempt to shutdown the Droplet in a graceful way, similar to using the <code>shutdown</code> command from the console. Since  a <code>shutdown</code> command can fail, this action guarantees that the command is issued, not that it succeeds. The preferred way to turn off a Droplet is to attempt a shutdown, with a reasonable timeout, followed by a power off action to ensure the Droplet is off.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be shutdown</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>. The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Shutdown A Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"shutdown"}' "https://api.digitalocean.com/v2/droplets/3067649/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;shutdown&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3067649/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.shutdown(droplet_id: 3067649)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.shutdown(droplet_id: 3067649)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "shutdown"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "shutdown"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36077293,
    "status": "in-progress",
    "type": "shutdown",
    "started_at": "2014-11-04T17:08:03Z",
    "completed_at": null,
    "resource_id": 3067649,
    "resource_type": "droplet",
    "region": "nyc2",
    "region_slug": "nyc2"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36077293,
    "status": "in-progress",
    "type": "shutdown",
    "started_at": "2014-11-04T17:08:03Z",
    "completed_at": null,
    "resource_id": 3067649,
    "resource_type": "droplet",
    "region": "nyc2",
    "region_slug": "nyc2"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="power-off-a-droplet">
        <div class="set-description">
          <h3>Power Off a Droplet</h3>

          <div>
            <p>To power off a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>power_off</code>.</p>
<p>A <code>power_off</code> event is a hard shutdown and should only be used if the <code>shutdown</code> action is not successful.  It is similar to cutting the power on a server and could lead to complications.</p>
<p>The request should contain the following attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be power_off</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Power Off a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"power_off"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;power_off&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.power_off(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.power_off(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "power_off"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "power_off"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1093
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1093
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804751,
    "status": "in-progress",
    "type": "power_off",
    "started_at": "2014-11-14T16:31:07Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804751,
    "status": "in-progress",
    "type": "power_off",
    "started_at": "2014-11-14T16:31:07Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="power-on-a-droplet">
        <div class="set-description">
          <h3>Power On a Droplet</h3>

          <div>
            <p>To power on a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>power_on</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be power_on</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Power On a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"power_on"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;power_on&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.power_on(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.power_on(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "power_on"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "power_on"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1088
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1088
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804758,
    "status": "in-progress",
    "type": "power_on",
    "started_at": "2014-11-14T16:31:19Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804758,
    "status": "in-progress",
    "type": "power_on",
    "started_at": "2014-11-14T16:31:19Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="restore-a-droplet">
        <div class="set-description">
          <h3>Restore a Droplet</h3>

          <div>
            <p>To restore a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>restore</code> and the "image" attribute to an image ID.</p>
<p>A Droplet restoration will rebuild an image using a backup image.  The image ID that is passed in must be a backup of the current Droplet instance.  The operation will leave any embedded SSH keys intact.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be restore</td><td>true</td></tr><tr><td>image</td><td>string if an image slug. number if an image ID.</td><td>An image slug or ID. This represents the image that the Droplet will use as a base.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>. The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Restore a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"restore", "image": 12389723 }' "https://api.digitalocean.com/v2/droplets/3067649/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;restore&quot;, &quot;image&quot;: 12389723 }&#39; &quot;https://api.digitalocean.com/v2/droplets/3067649/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.restore(droplet_id: 3067649, image: 12389723)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.restore(droplet_id: 3067649, image: 12389723)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "restore",
  "image": 12389723
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "restore",
  "image": 12389723
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36077293,
    "status": "in-progress",
    "type": "restore",
    "started_at": "2014-11-04T17:08:03Z",
    "completed_at": null,
    "resource_id": 3067649,
    "resource_type": "droplet",
    "region": "nyc2",
    "region_slug": "nyc2"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36077293,
    "status": "in-progress",
    "type": "restore",
    "started_at": "2014-11-04T17:08:03Z",
    "completed_at": null,
    "resource_id": 3067649,
    "resource_type": "droplet",
    "region": "nyc2",
    "region_slug": "nyc2"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="password-reset-a-droplet">
        <div class="set-description">
          <h3>Password Reset a Droplet</h3>

          <div>
            <p>To reset the password for a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>password_reset</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be password_reset</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Password Reset a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"password_reset"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;password_reset&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.password_reset(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.password_reset(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "password_reset"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "password_reset"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1085
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1085
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804760,
    "status": "in-progress",
    "type": "password_reset",
    "started_at": "2014-11-14T16:31:25Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804760,
    "status": "in-progress",
    "type": "password_reset",
    "started_at": "2014-11-14T16:31:25Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="resize-a-droplet">
        <div class="set-description">
          <h3>Resize a Droplet</h3>

          <div>
            <p>To resize a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>resize</code> and the "size" attribute to a sizes slug. If a permanent resize, with disk changes included, is desired, set the "disk" attribute to <code>true</code>.</p>
<p>The Droplet must be powered off prior to resizing.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be resize</td><td>true</td></tr><tr><td>disk</td><td>Boolean</td><td>Whether to increase disk size</td><td text="false"></td></tr><tr><td>size</td><td>string</td><td>The size slug that you want to resize to.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Resize a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"resize","size":"1gb"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;resize&quot;,&quot;size&quot;:&quot;1gb&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.resize(droplet_id: 3164450, size: '1gb')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.resize(droplet_id: 3164450, size: &#39;1gb&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "resize",
  "disk": true,
  "size": "1gb"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "resize",
  "disk": true,
  "size": "1gb"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1046
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1046
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804888,
    "status": "in-progress",
    "type": "resize",
    "started_at": "2014-11-14T16:33:17Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804888,
    "status": "in-progress",
    "type": "resize",
    "started_at": "2014-11-14T16:33:17Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="rebuild-a-droplet">
        <div class="set-description">
          <h3>Rebuild a Droplet</h3>

          <div>
            <p>To rebuild a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>rebuild</code> and the "image" attribute to an image ID or slug.</p>
<p>A rebuild action functions just like a new create.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be rebuild</td><td>true</td></tr><tr><td>image</td><td>string if an image slug. number if an image ID.</td><td>An image slug or ID. This represents the image that the Droplet will use as a base.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Rebuild a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"rebuild","image":"ubuntu-14-04-x64"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;rebuild&quot;,&quot;image&quot;:&quot;ubuntu-14-04-x64&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.rebuild(droplet_id: 3164450, image: 'ubuntu-14-04-x64')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.rebuild(droplet_id: 3164450, image: &#39;ubuntu-14-04-x64&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "rebuild",
  "image": "ubuntu-14-04-x64"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "rebuild",
  "image": "ubuntu-14-04-x64"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1043
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1043
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804899,
    "status": "in-progress",
    "type": "rebuild",
    "started_at": "2014-11-14T16:33:23Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804899,
    "status": "in-progress",
    "type": "rebuild",
    "started_at": "2014-11-14T16:33:23Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="rename-a-droplet">
        <div class="set-description">
          <h3>Rename a Droplet</h3>

          <div>
            <p>To rename a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>rename</code> and the "name" attribute to the new name for the droplet.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be rename</td><td>true</td></tr><tr><td>name</td><td>string</td><td>The new name for the Droplet.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Rename a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"rename","name":"nifty-new-name"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;rename&quot;,&quot;name&quot;:&quot;nifty-new-name&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.rename(droplet_id: 3164450, name: 'nifty-new-name')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.rename(droplet_id: 3164450, name: &#39;nifty-new-name&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "rename",
  "name": "nifty-new-name"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "rename",
  "name": "nifty-new-name"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1025
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1025
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804946,
    "status": "in-progress",
    "type": "rename",
    "started_at": "2014-11-14T16:34:16Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804946,
    "status": "in-progress",
    "type": "rename",
    "started_at": "2014-11-14T16:34:16Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="change-the-kernel">
        <div class="set-description">
          <h3>Change the Kernel</h3>

          <div>
            <p>To change the kernel of a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>change_kernel</code> and the "kernel" attribute to the new kernel's ID.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be change_kernel</td><td>true</td></tr><tr><td>kernel</td><td>number</td><td>A unique number used to identify and reference a specific kernel.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Change the Kernel</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"change_kernel","kernel":991}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;change_kernel&quot;,&quot;kernel&quot;:991}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.change_kernel(droplet_id: 3164450, kernel: 991)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.change_kernel(droplet_id: 3164450, kernel: 991)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "change_kernel",
  "kernel": 991
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "change_kernel",
  "kernel": 991
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1016
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1016
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804951,
    "status": "in-progress",
    "type": "change_kernel",
    "started_at": "2014-11-14T16:34:20Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804951,
    "status": "in-progress",
    "type": "change_kernel",
    "started_at": "2014-11-14T16:34:20Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="enable-ipv6">
        <div class="set-description">
          <h3>Enable IPv6</h3>

          <div>
            <p>To enable IPv6 networking on an existing Droplet (within a region that has IPv6 available), send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>enable_ipv6</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be enable_ipv6</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Enable IPv6</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"enable_ipv6"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;enable_ipv6&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.enable_ipv6(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.enable_ipv6(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "enable_ipv6"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "enable_ipv6"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1014
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1014
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804954,
    "status": "in-progress",
    "type": "enable_ipv6",
    "started_at": "2014-11-14T16:34:24Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804954,
    "status": "in-progress",
    "type": "enable_ipv6",
    "started_at": "2014-11-14T16:34:24Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="enable-private-networking">
        <div class="set-description">
          <h3>Enable Private Networking</h3>

          <div>
            <p>To enable private networking on an existing Droplet (within a region that has private networking available), send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>enable_private_networking</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be enable_private_networking</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Enable Private Networking</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"enable_private_networking"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;enable_private_networking&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.enable_private_networking(droplet_id: 3164450)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.enable_private_networking(droplet_id: 3164450)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "enable_private_networking"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "enable_private_networking"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1008
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1008
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36805001,
    "status": "in-progress",
    "type": "enable_private_networking",
    "started_at": "2014-11-14T16:34:36Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36805001,
    "status": "in-progress",
    "type": "enable_private_networking",
    "started_at": "2014-11-14T16:34:36Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="snapshot-a-droplet">
        <div class="set-description">
          <h3>Snapshot a Droplet</h3>

          <div>
            <p>To snapshot a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>snapshot</code> and the "name" attribute to the name you would like to give the created image.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be snapshot</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Snapshot a Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"snapshot","name":"Nifty New Snapshot"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;snapshot&quot;,&quot;name&quot;:&quot;Nifty New Snapshot&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.snapshot(droplet_id: 3164450, name: 'Nifty New Snapshot')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.snapshot(droplet_id: 3164450, name: &#39;Nifty New Snapshot&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "snapshot",
  "name": "Nifty New Snapshot"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "snapshot",
  "name": "Nifty New Snapshot"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1006
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1006
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36805022,
    "status": "in-progress",
    "type": "snapshot",
    "started_at": "2014-11-14T16:34:39Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36805022,
    "status": "in-progress",
    "type": "snapshot",
    "started_at": "2014-11-14T16:34:39Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-a-droplet-action">
        <div class="set-description">
          <h3>Retrieve a Droplet Action</h3>

          <div>
            <p>To retrieve a Droplet action, send a GET request to <code>/v2/droplets/$DROPLET_ID/actions/$ACTION_ID</code>.</p>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Retrieve a Droplet Action</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/droplets/3164444/actions/36804807"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/droplets/3164444/actions/36804807&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.droplet_actions.find(droplet_id: 3164444, id: 36804807)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.droplet_actions.find(droplet_id: 3164444, id: 36804807)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 966
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 966
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36804807,
    "status": "completed",
    "type": "backup",
    "started_at": "2014-11-14T16:32:24Z",
    "completed_at": "2014-11-14T16:34:15Z",
    "resource_id": 3164444,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36804807,
    "status": "completed",
    "type": "backup",
    "started_at": "2014-11-14T16:32:24Z",
    "completed_at": "2014-11-14T16:34:15Z",
    "resource_id": 3164444,
    "resource_type": "droplet",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="upgrade-a-droplet">
        <div class="set-description">
          <h3>Upgrade A Droplet</h3>

          <div>
            <p>To upgrade a Droplet, send a POST request to <code>/v2/droplets/$DROPLET_ID/actions</code>.  Set the "type" attribute to <code>upgrade</code></p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>upgrade</td><td>string</td><td>Must be upgrade</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value will be a Droplet actions object:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique identifier for each Droplet action event.  This is used to reference a specific action that was requested.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  The value of this attribute will be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>The type of action that the event is executing (reboot, power_off, etc.).</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Upgrade A Droplet</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"upgrade"}' "https://api.digitalocean.com/v2/droplets/3164450/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;upgrade&quot;}&#39; &quot;https://api.digitalocean.com/v2/droplets/3164450/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe"></code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "upgrade"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "upgrade"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1006
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 1006
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36805022,
    "status": "in-progress",
    "type": "upgrade",
    "started_at": "2014-11-14T16:34:39Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc1",
    "region_slug": "nyc1"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36805022,
    "status": "in-progress",
    "type": "upgrade",
    "started_at": "2014-11-14T16:34:39Z",
    "completed_at": null,
    "resource_id": 3164450,
    "resource_type": "droplet",
    "region": "nyc1",
    "region_slug": "nyc1"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="images">

    <div class="set-description">
      <h3>Images</h3>
      <p><p>Images in DigitalOcean may refer to one of a few different kinds of objects. </p>
<p>An image may refer to a snapshot that has been taken of a Droplet instance.  It may also mean an image representing an automatic backup of a Droplet.  The third category that it can represent is a public Linux distribution or application image that is used as a base to create Droplets.</p>
<p>To interact with images, you will generally send requests to the images endpoint at <code>/v2/images</code>.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>A unique number that can be used to identify and reference a specific image.</td>
          </tr>
        
          <tr>
            <td><strong>name</strong></td>
            <td><em>string</em></td>
            <td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td>
          </tr>
        
          <tr>
            <td><strong>type</strong></td>
            <td><em>string</em></td>
            <td>The kind of image, describing the duration of how long the image is stored. This is either "snapshot" or "backup".</td>
          </tr>
        
          <tr>
            <td><strong>distribution</strong></td>
            <td><em>string</em></td>
            <td>This attribute describes the base distribution used for this image.</td>
          </tr>
        
          <tr>
            <td><strong>slug</strong></td>
            <td><em>nullable string</em></td>
            <td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td>
          </tr>
        
          <tr>
            <td><strong>public</strong></td>
            <td><em>boolean</em></td>
            <td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td>
          </tr>
        
          <tr>
            <td><strong>regions</strong></td>
            <td><em>array</em></td>
            <td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td>
          </tr>
        
          <tr>
            <td><strong>min_disk_size</strong></td>
            <td><em>number</em></td>
            <td>The minimum 'disk' required for a size to use this image.</td>
          </tr>
        
          <tr>
            <td><strong>created_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-images">
        <div class="set-description">
          <h3>List all Images</h3>

          <div>
            <p>To list all of the images available on your account, send a GET request to <code>/v2/images</code>.</p>
<p>The response will be a JSON object with a key called <code>images</code>.  This will be set to an array of image objects, each of which will contain the standard image attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Images</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.all.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.all.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 777
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 777
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "images": [
    {
      "id": 7555620,
      "name": "Nifty New Snapshot",
      "distribution": "Ubuntu",
      "slug": null,
      "public": false,
      "regions": [
        "nyc2",
        "nyc2"
      ],
      "created_at": "2014-11-04T22:23:02Z",
      "type": "snapshot",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=56&per_page=1",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 56
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "images": [
    {
      "id": 7555620,
      "name": "Nifty New Snapshot",
      "distribution": "Ubuntu",
      "slug": null,
      "public": false,
      "regions": [
        "nyc2",
        "nyc2"
      ],
      "created_at": "2014-11-04T22:23:02Z",
      "type": "snapshot",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=56&per_page=1",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 56
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-all-distribution-images">
        <div class="set-description">
          <h3>List all Distribution Images</h3>

          <div>
            <p>To retrieve only distribution images, include the <code>type</code> query paramter set to <code>distribution</code>, <code>/v2/images?type=distribution</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Distribution Images</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images?page=1&per_page=1&type=distribution"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images?page=1&amp;per_page=1&amp;type=distribution&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.all(type: 'distribution').each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.all(type: &#39;distribution&#39;).each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 776
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 776
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "images": [
    {
      "id": 6370882,
      "name": "20 x64",
      "distribution": "Fedora",
      "slug": "fedora-20-x64",
      "public": true,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
        "nyc3"
      ],
      "created_at": "2014-09-26T15:29:01Z",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=24&per_page=1&type=distribution",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1&type=distribution"
    }
  },
  "meta": {
    "total": 24
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "images": [
    {
      "id": 6370882,
      "name": "20 x64",
      "distribution": "Fedora",
      "slug": "fedora-20-x64",
      "public": true,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
        "nyc3"
      ],
      "created_at": "2014-09-26T15:29:01Z",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=24&per_page=1&type=distribution",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1&type=distribution"
    }
  },
  "meta": {
    "total": 24
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-all-application-images">
        <div class="set-description">
          <h3>List all Application Images</h3>

          <div>
            <p>To retrieve only application images, include the <code>type</code> query paramter set to <code>application</code>, <code>/v2/images?type=application</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Application Images</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images?page=1&per_page=1&type=application"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images?page=1&amp;per_page=1&amp;type=application&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.all(type: 'application').each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.all(type: &#39;application&#39;).each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 775
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 775
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "images": [
    {
      "id": 6376601,
      "name": "Ruby on Rails on 14.04 (Nginx + Unicorn)",
      "distribution": "Ubuntu",
      "slug": "ruby-on-rails",
      "public": true,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
        "nyc1"
      ],
      "created_at": "2014-09-26T20:20:24Z",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=14&per_page=1&type=application",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1&type=application"
    }
  },
  "meta": {
    "total": 14
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "images": [
    {
      "id": 6376601,
      "name": "Ruby on Rails on 14.04 (Nginx + Unicorn)",
      "distribution": "Ubuntu",
      "slug": "ruby-on-rails",
      "public": true,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1",
        "lon1",
        "nyc3",
        "ams3",
        "nyc1"
      ],
      "created_at": "2014-09-26T20:20:24Z",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=14&per_page=1&type=application",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1&type=application"
    }
  },
  "meta": {
    "total": 14
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-a-user-s-images">
        <div class="set-description">
          <h3>List a User's Images</h3>

          <div>
            <p>To retrieve only the private images of a user, include the <code>private</code> query paramter set to <code>true</code>, <code>/v2/images?private=true</code>.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List a User's Images</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images?page=1&per_page=1&private=true"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images?page=1&amp;per_page=1&amp;private=true&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.all.each(public: false)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.all.each(public: false)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 775
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 775
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "images": [
    {
      "id": 6376601,
      "name": "My application image",
      "distribution": "Ubuntu",
      "public": false,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1"
      ],
      "created_at": "2014-09-26T20:20:24Z",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=14&per_page=1&type=application",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1&type=application"
    }
  },
  "meta": {
    "total": 14
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "images": [
    {
      "id": 6376601,
      "name": "My application image",
      "distribution": "Ubuntu",
      "public": false,
      "regions": [
        "nyc1",
        "ams1",
        "sfo1",
        "nyc2",
        "ams2",
        "sgp1"
      ],
      "created_at": "2014-09-26T20:20:24Z",
      "min_disk_size": 20
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images?page=14&per_page=1&type=application",
      "next": "https://api.digitalocean.com/v2/images?page=2&per_page=1&type=application"
    }
  },
  "meta": {
    "total": 14
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="list-all-actions-for-an-image">
        <div class="set-description">
          <h3>List all actions for an image</h3>

          <div>
            <p>To retrieve all actions that have been executed on an image, send a GET request to <code>/v2/images/$IMAGE_ID/actions</code>.</p>
<p>The results will be returned as a JSON object with an <code>actions</code> key.  This will be set to an array filled with action objects containing the standard action attributes:</p>
          </div>

          <!-- Attributes for this example -->
          <table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the action.  This can be &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of action that the object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
        </div>

        <div class="set-curl">
          <h3>List all actions for an image</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images/7555620/actions?page=1&per_page=1"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images/7555620/actions?page=1&amp;per_page=1&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe"></code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 775
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 775
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "actions": [
    {
      "id": 29410565,
      "status": "completed",
      "type": "transfer",
      "started_at": "2014-07-25T15:04:21Z",
      "completed_at": "2014-07-25T15:10:20Z",
      "resource_id": 7555620,
      "resource_type": "image",
      "region": "nyc2",
      "region_slug": "nyc2"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images/7555620/actions?page=5&per_page=1",
      "next": "https://api.digitalocean.com/v2/images/7555620/actions?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 5
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "actions": [
    {
      "id": 29410565,
      "status": "completed",
      "type": "transfer",
      "started_at": "2014-07-25T15:04:21Z",
      "completed_at": "2014-07-25T15:10:20Z",
      "resource_id": 7555620,
      "resource_type": "image",
      "region": "nyc2",
      "region_slug": "nyc2"
    }
  ],
  "links": {
    "pages": {
      "last": "https://api.digitalocean.com/v2/images/7555620/actions?page=5&per_page=1",
      "next": "https://api.digitalocean.com/v2/images/7555620/actions?page=2&per_page=1"
    }
  },
  "meta": {
    "total": 5
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-image-by-id">
        <div class="set-description">
          <h3>Retrieve an existing Image by id</h3>

          <div>
            <p>To retrieve information about an image (public or private), send a GET request to <code>/v2/images/$IMAGE_ID</code>.</p>
<p>The response will be a JSON object with a key called <code>image</code>.  The value of this will be an image object containing the standard image attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Image by id</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images/7555620"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images/7555620&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.find(id: '7555620')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.find(id: &#39;7555620&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 774
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 774
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "image": {
    "id": 7555620,
    "name": "Nifty New Snapshot",
    "distribution": "Ubuntu",
    "slug": null,
    "public": false,
    "regions": [
      "nyc2",
      "nyc2"
    ],
    "created_at": "2014-11-04T22:23:02Z",
    "min_disk_size": 20
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "image": {
    "id": 7555620,
    "name": "Nifty New Snapshot",
    "distribution": "Ubuntu",
    "slug": null,
    "public": false,
    "regions": [
      "nyc2",
      "nyc2"
    ],
    "created_at": "2014-11-04T22:23:02Z",
    "min_disk_size": 20
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-image-by-slug">
        <div class="set-description">
          <h3>Retrieve an existing Image by slug</h3>

          <div>
            <p>To retrieve information about a public image, one option is to send a GET request to <code>/v2/images/$IMAGE_SLUG</code>.</p>
<p>The response will be a JSON object with a key called <code>image</code>.  The value of this will be an image object containing the standard image attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Image by slug</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images/ubuntu-14-04-x64"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images/ubuntu-14-04-x64&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.find(id: 'ubuntu-14-04-x64')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.find(id: &#39;ubuntu-14-04-x64&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 773
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 773
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "image": {
    "id": 6918990,
    "name": "14.04 x64",
    "distribution": "Ubuntu",
    "slug": "ubuntu-14-04-x64",
    "public": true,
    "regions": [
      "nyc1",
      "ams1",
      "sfo1",
      "nyc2",
      "ams2",
      "sgp1",
      "lon1",
      "nyc3",
      "ams3",
      "nyc3"
    ],
    "created_at": "2014-10-17T20:24:33Z",
    "min_disk_size": 20
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "image": {
    "id": 6918990,
    "name": "14.04 x64",
    "distribution": "Ubuntu",
    "slug": "ubuntu-14-04-x64",
    "public": true,
    "regions": [
      "nyc1",
      "ams1",
      "sfo1",
      "nyc2",
      "ams2",
      "sgp1",
      "lon1",
      "nyc3",
      "ams3",
      "nyc3"
    ],
    "created_at": "2014-10-17T20:24:33Z",
    "min_disk_size": 20
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="update-an-image">
        <div class="set-description">
          <h3>Update an Image</h3>

          <div>
            <p>To update an image, send a PUT request to <code>/v2/images/$IMAGE_ID</code>.  Set the "name" attribute to the new value you would like to use.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The new name that you would like to use for the image.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key set to <code>image</code>.  The value of this will be an image object containing the standard image attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique number that can be used to identify and reference a specific image.</td></tr><tr><td>name</td><td>string</td><td>The display name that has been given to an image.  This is what is shown in the control panel and is generally a descriptive title for the image in question.</td></tr><tr><td>type</td><td>string</td><td>The kind of image, describing the duration of how long the image is stored. This is either &quot;snapshot&quot; or &quot;backup&quot;.</td></tr><tr><td>distribution</td><td>string</td><td>This attribute describes the base distribution used for this image.</td></tr><tr><td>slug</td><td>nullable string</td><td>A uniquely identifying string that is associated with each of the DigitalOcean-provided public images.  These can be used to reference a public image as an alternative to the numeric id.</td></tr><tr><td>public</td><td>boolean</td><td>This is a boolean value that indicates whether the image in question is public or not.  An image that is public is available to all accounts.  A non-public image is only accessible from your account.</td></tr><tr><td>regions</td><td>array</td><td>This attribute is an array of the regions that the image is available in.  The regions are represented by their identifying slug values.</td></tr><tr><td>min_disk_size</td><td>number</td><td>The minimum &#39;disk&#39; required for a size to use this image.</td></tr><tr><td>created_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the Image was created.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Update an Image</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X PUT -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"name":"new-image-name"}' "https://api.digitalocean.com/v2/images/7938391"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X PUT -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;name&quot;:&quot;new-image-name&quot;}&#39; &quot;https://api.digitalocean.com/v2/images/7938391&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">image = DropletKit::Image.new(name: 'new-image-name')
client.images.update(image, id: 7938391)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='image = DropletKit::Image.new(name: &#39;new-image-name&#39;)
client.images.update(image, id: 7938391)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "name": "new-image-name"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "name": "new-image-name"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 772
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 772
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "image": {
    "id": 7938391,
    "name": "new-image-name",
    "distribution": "Ubuntu",
    "slug": null,
    "public": false,
    "regions": [
      "nyc3",
      "nyc3"
    ],
    "created_at": "2014-11-14T16:44:03Z",
    "min_disk_size": 20
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "image": {
    "id": 7938391,
    "name": "new-image-name",
    "distribution": "Ubuntu",
    "slug": null,
    "public": false,
    "regions": [
      "nyc3",
      "nyc3"
    ],
    "created_at": "2014-11-14T16:44:03Z",
    "min_disk_size": 20
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="s1">
        <div class="set-description">
          <h3>Delete an Image</h3>

          <div>
            <p>To delete an image, send a DELETE request to <code>/v2/images/$IMAGE_ID</code>.</p>
<p>A status of 204 will be given.  This indicates that the request was processed successfully, but that no response body is needed.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Delete an Image</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X DELETE -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images/7938391"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X DELETE -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images/7938391&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.images.delete(id: 7938391)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.images.delete(id: 7938391)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 771
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 771
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="image-actions">

    <div class="set-description">
      <h3>Image Actions</h3>
      <p><p>Image actions are commands that can be given to a DigitalOcean image.  In general, these requests are made on the <code>actions</code> endpoint of a specific image.</p>
<p>An image action object is returned.  These objects hold the current status of the requested action.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>A unique numeric ID that can be used to identify and reference an image action.</td>
          </tr>
        
          <tr>
            <td><strong>status</strong></td>
            <td><em>string</em></td>
            <td>The current status of the image action.  This will be either "in-progress", "completed", or "errored".</td>
          </tr>
        
          <tr>
            <td><strong>type</strong></td>
            <td><em>string</em></td>
            <td>This is the type of the image action that the JSON object represents.  For example, this could be "transfer" to represent the state of an image transfer action.</td>
          </tr>
        
          <tr>
            <td><strong>started_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td>
          </tr>
        
          <tr>
            <td><strong>completed_at</strong></td>
            <td><em>string</em></td>
            <td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td>
          </tr>
        
          <tr>
            <td><strong>resource_id</strong></td>
            <td><em>number</em></td>
            <td>A unique identifier for the resource that the action is associated with.</td>
          </tr>
        
          <tr>
            <td><strong>resource_type</strong></td>
            <td><em>string</em></td>
            <td>The type of resource that the action is associated with.</td>
          </tr>
        
          <tr>
            <td><strong>region</strong></td>
            <td><em>nullable string</em></td>
            <td>(deprecated) A slug representing the region where the action occurred.</td>
          </tr>
        
          <tr>
            <td><strong>region_slug</strong></td>
            <td><em>nullable string</em></td>
            <td>A slug representing the region where the action occurred.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="transfer-an-image">
        <div class="set-description">
          <h3>Transfer an Image</h3>

          <div>
            <p>To transfer an image to another region, send a POST request to <code>/v2/images/$IMAGE_ID/actions</code>.  Set the "type" attribute to "transfer" and set "region" attribute to the slug identifier of the region you wish to transfer to.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be transfer</td><td>true</td></tr><tr><td>region</td><td>string</td><td>The region slug that represents the region target.</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value of this will be an object containing the standard image action attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an image action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the image action.  This will be either &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of the image action that the JSON object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Transfer an Image</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"transfer","region":"nyc2"}' "https://api.digitalocean.com/v2/images/7938269/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;transfer&quot;,&quot;region&quot;:&quot;nyc2&quot;}&#39; &quot;https://api.digitalocean.com/v2/images/7938269/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.image_actions.transfer(image_id: 7938269, region: 'nyc2')</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.image_actions.transfer(image_id: 7938269, region: &#39;nyc2&#39;)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "transfer",
  "region": "nyc2"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "transfer",
  "region": "nyc2"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 838
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 838
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36805527,
    "status": "in-progress",
    "type": "transfer",
    "started_at": "2014-11-14T16:42:45Z",
    "completed_at": null,
    "resource_id": 7938269,
    "resource_type": "image",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36805527,
    "status": "in-progress",
    "type": "transfer",
    "started_at": "2014-11-14T16:42:45Z",
    "completed_at": null,
    "resource_id": 7938269,
    "resource_type": "image",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="convert-an-image-to-a-snapshot">
        <div class="set-description">
          <h3>Convert an Image to a snapshot</h3>

          <div>
            <p>To convert an image, for example, a backup to a snapshot, send a POST request to <code>/v2/images/$IMAGE_ID/actions</code>.  Set the "type" attribute to "convert".</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>type</td><td>string</td><td>Must be convert</td><td>true</td></tr></tbody></table>
<p>The response will be a JSON object with a key called <code>action</code>.  The value of this will be an object containing the standard image action attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an image action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the image action.  This will be either &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of the image action that the JSON object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Convert an Image to a snapshot</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"type":"convert"}' "https://api.digitalocean.com/v2/images/7938291/actions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;type&quot;:&quot;convert&quot;}&#39; &quot;https://api.digitalocean.com/v2/images/7938291/actions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.image_actions.convert(image_id: 7938269)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.image_actions.convert(image_id: 7938269)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "type": "convert"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "type": "convert"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 838
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 838
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 46592838,
    "status": "completed",
    "type": "convert_to_snapshot",
    "started_at": "2015-03-24T19:02:47Z",
    "completed_at": "2015-03-24T19:02:47Z",
    "resource_id": 11060029,
    "resource_type": "image",
    "region": null,
    "region_slug": null
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 46592838,
    "status": "completed",
    "type": "convert_to_snapshot",
    "started_at": "2015-03-24T19:02:47Z",
    "completed_at": "2015-03-24T19:02:47Z",
    "resource_id": 11060029,
    "resource_type": "image",
    "region": null,
    "region_slug": null
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="retrieve-an-existing-image-action">
        <div class="set-description">
          <h3>Retrieve an existing Image Action</h3>

          <div>
            <p>To retrieve the status of an image action, send a GET request to <code>/v2/images/$IMAGE_ID/actions/$IMAGE_ACTION_ID</code>.</p>
<p>The response will be an object with a key called <code>action</code>.  The value of this will be an object that contains the standard image action attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>A unique numeric ID that can be used to identify and reference an image action.</td></tr><tr><td>status</td><td>string</td><td>The current status of the image action.  This will be either &quot;in-progress&quot;, &quot;completed&quot;, or &quot;errored&quot;.</td></tr><tr><td>type</td><td>string</td><td>This is the type of the image action that the JSON object represents.  For example, this could be &quot;transfer&quot; to represent the state of an image transfer action.</td></tr><tr><td>started_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was initiated.</td></tr><tr><td>completed_at</td><td>string</td><td>A time value given in ISO8601 combined date and time format that represents when the action was completed.</td></tr><tr><td>resource_id</td><td>number</td><td>A unique identifier for the resource that the action is associated with.</td></tr><tr><td>resource_type</td><td>string</td><td>The type of resource that the action is associated with.</td></tr><tr><td>region</td><td>nullable string</td><td>(deprecated) A slug representing the region where the action occurred.</td></tr><tr><td>region_slug</td><td>nullable string</td><td>A slug representing the region where the action occurred.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Image Action</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/images/7938269/actions/36805527"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/images/7938269/actions/36805527&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.image_actions.find(image_id: 7938269, id: 36805527)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.image_actions.find(image_id: 7938269, id: 36805527)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 837
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 837
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "action": {
    "id": 36805527,
    "status": "in-progress",
    "type": "transfer",
    "started_at": "2014-11-14T16:42:45Z",
    "completed_at": null,
    "resource_id": 7938269,
    "resource_type": "image",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "action": {
    "id": 36805527,
    "status": "in-progress",
    "type": "transfer",
    "started_at": "2014-11-14T16:42:45Z",
    "completed_at": null,
    "resource_id": 7938269,
    "resource_type": "image",
    "region": "nyc3",
    "region_slug": "nyc3"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="ssh-keys">

    <div class="set-description">
      <h3>SSH Keys</h3>
      <p><p>DigitalOcean allows you to add SSH public keys to the interface so that you can embed your public key into a Droplet at the time of creation.  Only the public key is required to take advantage of this functionality.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>id</strong></td>
            <td><em>number</em></td>
            <td>This is a unique identification number for the key.  This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.</td>
          </tr>
        
          <tr>
            <td><strong>fingerprint</strong></td>
            <td><em>string</em></td>
            <td>This attribute contains the fingerprint value that is generated from the public key.  This is a unique identifier that will differentiate it from other keys using a format that SSH recognizes.</td>
          </tr>
        
          <tr>
            <td><strong>public_key</strong></td>
            <td><em>string</em></td>
            <td>This attribute contains the entire public key string that was uploaded.  This is what is embedded into the root user's authorized_keys file if you choose to include this SSH key during Droplet creation.</td>
          </tr>
        
          <tr>
            <td><strong>name</strong></td>
            <td><em>string</em></td>
            <td>This is the human-readable display name for the given SSH key.  This is used to easily identify the SSH keys when they are displayed.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-keys">
        <div class="set-description">
          <h3>List all Keys</h3>

          <div>
            <p>To list all of the keys in your account, send a GET request to <code>/v2/account/keys</code>.</p>
<p>The response will be a JSON object with a key set to <code>ssh_keys</code>.  The value of this will be an array of key objects, each of which contain the standard key attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>This is a unique identification number for the key.  This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.</td></tr><tr><td>fingerprint</td><td>string</td><td>This attribute contains the fingerprint value that is generated from the public key.  This is a unique identifier that will differentiate it from other keys using a format that SSH recognizes.</td></tr><tr><td>public_key</td><td>string</td><td>This attribute contains the entire public key string that was uploaded.  This is what is embedded into the root user&#39;s authorized_keys file if you choose to include this SSH key during Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>This is the human-readable display name for the given SSH key.  This is used to easily identify the SSH keys when they are displayed.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Keys</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/account/keys"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/account/keys&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.ssh_keys.all().each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.ssh_keys.all().each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 767
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 767
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "ssh_keys": [
    {
      "id": 512189,
      "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
      "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
      "name": "My SSH Public Key"
    }
  ],
  "links": {
  },
  "meta": {
    "total": 1
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "ssh_keys": [
    {
      "id": 512189,
      "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
      "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
      "name": "My SSH Public Key"
    }
  ],
  "links": {
  },
  "meta": {
    "total": 1
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="create-a-new-key">
        <div class="set-description">
          <h3>Create a new Key</h3>

          <div>
            <p>To add a new SSH public key to your DigitalOcean account, send a POST request to <code>/v2/account/keys</code>.  Set the "name" attribute to the name you wish to use and the "public_key" attribute to a string of the full public key you are adding.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The name to give the new SSH key in your account.</td><td>true</td></tr><tr><td>public_key</td><td>string</td><td>A string containing the entire public key.</td><td>true</td></tr></tbody></table>
<p>The response body will be a JSON object with a key set to <code>ssh_key</code>.  The value will be the complete generated key object. This will have the standard key attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>This is a unique identification number for the key.  This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.</td></tr><tr><td>fingerprint</td><td>string</td><td>This attribute contains the fingerprint value that is generated from the public key.  This is a unique identifier that will differentiate it from other keys using a format that SSH recognizes.</td></tr><tr><td>public_key</td><td>string</td><td>This attribute contains the entire public key string that was uploaded.  This is what is embedded into the root user&#39;s authorized_keys file if you choose to include this SSH key during Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>This is the human-readable display name for the given SSH key.  This is used to easily identify the SSH keys when they are displayed.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Create a new Key</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X POST -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"name":"My SSH Public Key","public_key":"ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example"}' "https://api.digitalocean.com/v2/account/keys"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X POST -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;name&quot;:&quot;My SSH Public Key&quot;,&quot;public_key&quot;:&quot;ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example&quot;}&#39; &quot;https://api.digitalocean.com/v2/account/keys&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">ssh_key = DropletKit::SSHKey.new(name: 'My SSH Public Key', public_key: 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example')
client.ssh_keys.create(ssh_key)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='ssh_key = DropletKit::SSHKey.new(name: &#39;My SSH Public Key&#39;, public_key: &#39;ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example&#39;)
client.ssh_keys.create(ssh_key)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "name": "My SSH Public Key",
  "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "name": "My SSH Public Key",
  "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 765
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 201 Created
ratelimit-limit: 1200
ratelimit-remaining: 765
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "ssh_key": {
    "id": 512190,
    "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
    "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
    "name": "My SSH Public Key"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "ssh_key": {
    "id": 512190,
    "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
    "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
    "name": "My SSH Public Key"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="s2">
        <div class="set-description">
          <h3>Retrieve an existing Key</h3>

          <div>
            <p>To show information about a key, send a GET request to <code>/v2/account/keys/$KEY_ID</code> or <code>/v2/account/keys/$KEY_FINGERPRINT</code>.</p>
<p>The response will be a JSON object with a key called <code>ssh_key</code>.  The value of this will be a key object which contains the standard key attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>This is a unique identification number for the key.  This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.</td></tr><tr><td>fingerprint</td><td>string</td><td>This attribute contains the fingerprint value that is generated from the public key.  This is a unique identifier that will differentiate it from other keys using a format that SSH recognizes.</td></tr><tr><td>public_key</td><td>string</td><td>This attribute contains the entire public key string that was uploaded.  This is what is embedded into the root user&#39;s authorized_keys file if you choose to include this SSH key during Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>This is the human-readable display name for the given SSH key.  This is used to easily identify the SSH keys when they are displayed.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Retrieve an existing Key</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/account/keys/512190"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/account/keys/512190&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.ssh_keys.find(id: 512190)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.ssh_keys.find(id: 512190)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 764
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 764
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "ssh_key": {
    "id": 512190,
    "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
    "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
    "name": "My SSH Public Key"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "ssh_key": {
    "id": 512190,
    "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
    "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
    "name": "My SSH Public Key"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="update-a-key">
        <div class="set-description">
          <h3>Update a Key</h3>

          <div>
            <p>To update the name of an SSH key, send a PUT request to either <code>/v2/account/keys/$SSH_KEY_ID</code> or <code>/v2/account/keys/$SSH_KEY_FINGERPRINT</code>.  Set the "name" attribute to the new name you want to use.</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th><th>Required</th></tr></thead><tbody><tr><td>name</td><td>string</td><td>The name to give the new SSH key in your account.</td><td>true</td></tr></tbody></table>
<p>The response body will be a JSON object with a key set to <code>ssh_key</code>.  The value will be an ojbect that contains the standard key attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>id</td><td>number</td><td>This is a unique identification number for the key.  This can be used to reference a specific SSH key when you wish to embed a key into a Droplet.</td></tr><tr><td>fingerprint</td><td>string</td><td>This attribute contains the fingerprint value that is generated from the public key.  This is a unique identifier that will differentiate it from other keys using a format that SSH recognizes.</td></tr><tr><td>public_key</td><td>string</td><td>This attribute contains the entire public key string that was uploaded.  This is what is embedded into the root user&#39;s authorized_keys file if you choose to include this SSH key during Droplet creation.</td></tr><tr><td>name</td><td>string</td><td>This is the human-readable display name for the given SSH key.  This is used to easily identify the SSH keys when they are displayed.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          

        </div>

        <div class="set-curl">
          <h3>Update a Key</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X PUT -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' -d '{"name":"Renamed SSH Key"}' "https://api.digitalocean.com/v2/account/keys/512190"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X PUT -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; -d &#39;{&quot;name&quot;:&quot;Renamed SSH Key&quot;}&#39; &quot;https://api.digitalocean.com/v2/account/keys/512190&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">ssh_key = DropletKit::SSHKey.new(name: 'Renamed SSH Key')
client.ssh_keys.update(ssh_key, id: 512190)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='ssh_key = DropletKit::SSHKey.new(name: &#39;Renamed SSH Key&#39;)
client.ssh_keys.update(ssh_key, id: 512190)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Request Body</h4>
              <pre><code class="highlightMe">{
  "name": "Renamed SSH Key"
}</code></pre>
              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "name": "Renamed SSH Key"
}' href='#'></a>
            </div>
          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            

            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 763
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 763
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "ssh_key": {
    "id": 512190,
    "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
    "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
    "name": "Renamed SSH Key"
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "ssh_key": {
    "id": 512190,
    "fingerprint": "3b:16:bf:e4:8b:00:8b:b8:59:8c:a9:d3:f0:19:45:fa",
    "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAQQDDHr/jh2Jy4yALcK4JyWbVkPRaWmhck3IgCoeOO3z1e2dBowLh64QAM+Qb72pxekALga2oi4GvT+TlWNhzPH4V example",
    "name": "Renamed SSH Key"
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  
    <div class="set">
      <div class="inner-set" id="destroy-a-key">
        <div class="set-description">
          <h3>Destroy a Key</h3>

          <div>
            <p>To destroy a public SSH key that you have in your account, send a DELETE request to <code>/v2/account/keys/$KEY_ID</code> or <code>/v2/account/keys/$KEY_FINGERPRINT</code>. </p>
<p>A 204 status will be returned, indicating that the action was successful and that the response body is empty.</p>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>Destroy a Key</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X DELETE -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/account/keys/512190"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X DELETE -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/account/keys/512190&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.ssh_keys.delete(id: 512190)</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.ssh_keys.delete(id: 512190)' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 762
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/octet-stream
status: 204 No Content
ratelimit-limit: 1200
ratelimit-remaining: 762
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="regions">

    <div class="set-description">
      <h3>Regions</h3>
      <p><p>A region in DigitalOcean represents a datacenter where Droplets can be deployed and images can be transferred.</p>
<p>Each region represents a specific datacenter in a geographic location.  Some geographical locations may have multiple "regions" available.  This means that there are multiple datacenters available within that area.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>slug</strong></td>
            <td><em>string</em></td>
            <td>A human-readable string that is used as a unique identifier for each region.</td>
          </tr>
        
          <tr>
            <td><strong>name</strong></td>
            <td><em>string</em></td>
            <td>The display name of the region.  This will be a full name that is used in the control panel and other interfaces.</td>
          </tr>
        
          <tr>
            <td><strong>sizes</strong></td>
            <td><em>array</em></td>
            <td>This attribute is set to an array which contains the identifying slugs for the sizes available in this region.</td>
          </tr>
        
          <tr>
            <td><strong>available</strong></td>
            <td><em>boolean</em></td>
            <td>This is a boolean value that represents whether new Droplets can be created in this region.</td>
          </tr>
        
          <tr>
            <td><strong>features</strong></td>
            <td><em>array</em></td>
            <td>This attribute is set to an array which contains features available in this region</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-regions">
        <div class="set-description">
          <h3>List all Regions</h3>

          <div>
            <p>To list all of the regions that are available, send a GET request to <code>/v2/regions</code>.</p>
<p>The response will be a JSON object with a key called <code>regions</code>.  The value of this will be an array of region objects, each of which will contain the standard region attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>slug</td><td>string</td><td>A human-readable string that is used as a unique identifier for each region.</td></tr><tr><td>name</td><td>string</td><td>The display name of the region.  This will be a full name that is used in the control panel and other interfaces.</td></tr><tr><td>sizes</td><td>array</td><td>This attribute is set to an array which contains the identifying slugs for the sizes available in this region.</td></tr><tr><td>available</td><td>boolean</td><td>This is a boolean value that represents whether new Droplets can be created in this region.</td></tr><tr><td>features</td><td>array</td><td>This attribute is set to an array which contains features available in this region</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Regions</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/regions"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/regions&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.regions.all.each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.regions.all.each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 770
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 770
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "regions": [
    {
      "name": "New York 1",
      "slug": "nyc1",
      "sizes": [

      ],
      "features": [
        "virtio",
        "backups"
      ],
      "available": false
    },
    {
      "name": "Amsterdam 1",
      "slug": "ams1",
      "sizes": [

      ],
      "features": [
        "virtio",
        "backups"
      ],
      "available": false
    },
    {
      "name": "San Francisco 1",
      "slug": "sfo1",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "backups",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "New York 2",
      "slug": "nyc2",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups"
      ],
      "available": true
    },
    {
      "name": "Amsterdam 2",
      "slug": "ams2",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "Singapore 1",
      "slug": "sgp1",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "London 1",
      "slug": "lon1",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "New York 3",
      "slug": "nyc3",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "Amsterdam 3",
      "slug": "ams3",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    }
  ],
  "links": {
  },
  "meta": {
    "total": 9
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "regions": [
    {
      "name": "New York 1",
      "slug": "nyc1",
      "sizes": [

      ],
      "features": [
        "virtio",
        "backups"
      ],
      "available": false
    },
    {
      "name": "Amsterdam 1",
      "slug": "ams1",
      "sizes": [

      ],
      "features": [
        "virtio",
        "backups"
      ],
      "available": false
    },
    {
      "name": "San Francisco 1",
      "slug": "sfo1",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "backups",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "New York 2",
      "slug": "nyc2",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups"
      ],
      "available": true
    },
    {
      "name": "Amsterdam 2",
      "slug": "ams2",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "Singapore 1",
      "slug": "sgp1",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "London 1",
      "slug": "lon1",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "New York 3",
      "slug": "nyc3",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    },
    {
      "name": "Amsterdam 3",
      "slug": "ams3",
      "sizes": [
        "32gb",
        "16gb",
        "2gb",
        "1gb",
        "4gb",
        "8gb",
        "512mb",
        "64gb",
        "48gb"
      ],
      "features": [
        "virtio",
        "private_networking",
        "backups",
        "ipv6",
        "metadata"
      ],
      "available": true
    }
  ],
  "links": {
  },
  "meta": {
    "total": 9
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  







<!-- New Section:  -->

<div class="set category-head">
  <div class="inner-set" id="sizes">

    <div class="set-description">
      <h3>Sizes</h3>
      <p><p>The sizes objects represent different packages of hardware resources that can be used for Droplets.  When a Droplet is created, a size must be selected so that the correct resources can be allocated.</p>
<p>Each size represents a plan that bundles together specific sets of resources.  This includes the amount of RAM, the number of virtual CPUs, disk space, and transfer.  The size object also includes the pricing details and the regions that the size is available in.</p></p>
      <table class="pure-table pure-table-horizontal">
        <thead>
          <tr>
            <th>Attribute</th>
            <th>Type</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
        
          <tr>
            <td><strong>slug</strong></td>
            <td><em>string</em></td>
            <td>A human-readable string that is used to uniquely identify each size.</td>
          </tr>
        
          <tr>
            <td><strong>available</strong></td>
            <td><em>boolean</em></td>
            <td>This is a boolean value that represents whether new Droplets can be created with this size.</td>
          </tr>
        
          <tr>
            <td><strong>transfer</strong></td>
            <td><em>number</em></td>
            <td>The amount of transfer bandwidth that is available for Droplets created in this size.  This only counts traffic on the public interface.  The value is given in terabytes.</td>
          </tr>
        
          <tr>
            <td><strong>price_monthly</strong></td>
            <td><em>number</em></td>
            <td>This attribute describes the monthly cost of this Droplet size if the Droplet is kept for an entire month.  The value is measured in US dollars.</td>
          </tr>
        
          <tr>
            <td><strong>price_hourly</strong></td>
            <td><em>number</em></td>
            <td>This describes the price of the Droplet size as measured hourly.  The value is measured in US dollars.</td>
          </tr>
        
          <tr>
            <td><strong>memory</strong></td>
            <td><em>number</em></td>
            <td>The amount of RAM allocated to Droplets created of this size. The value is represented in megabytes.</td>
          </tr>
        
          <tr>
            <td><strong>vcpus</strong></td>
            <td><em>number</em></td>
            <td>The number of virtual CPUs allocated to Droplets of this size.</td>
          </tr>
        
          <tr>
            <td><strong>disk</strong></td>
            <td><em>number</em></td>
            <td>The amount of disk space set aside for Droplets of this size. The value is represented in gigabytes.</td>
          </tr>
        
          <tr>
            <td><strong>regions</strong></td>
            <td><em>array</em></td>
            <td>An array containing the region slugs where this size is available for Droplet creates.</td>
          </tr>
        
        </tbody>
      </table>
    </div>
    <div class="set-curl">

    </div>
  </div>
</div>


  
    <div class="set">
      <div class="inner-set" id="list-all-sizes">
        <div class="set-description">
          <h3>List all Sizes</h3>

          <div>
            <p>To list all of the sizes, send a GET request to <code>/v2/sizes</code>.</p>
<p>The response will be a JSON object with a key called <code>sizes</code>.  The value of this will be an array of size objects each of which contain the standard sizes attributes:</p>
<table class="pure-table pure-table-horizontal"><thead><tr><th>Name</th><th>Type</th><th>Description</th></tr></thead><tbody><tr><td>slug</td><td>string</td><td>A human-readable string that is used to uniquely identify each size.</td></tr><tr><td>available</td><td>boolean</td><td>This is a boolean value that represents whether new Droplets can be created with this size.</td></tr><tr><td>transfer</td><td>number</td><td>The amount of transfer bandwidth that is available for Droplets created in this size.  This only counts traffic on the public interface.  The value is given in terabytes.</td></tr><tr><td>price_monthly</td><td>number</td><td>This attribute describes the monthly cost of this Droplet size if the Droplet is kept for an entire month.  The value is measured in US dollars.</td></tr><tr><td>price_hourly</td><td>number</td><td>This describes the price of the Droplet size as measured hourly.  The value is measured in US dollars.</td></tr><tr><td>memory</td><td>number</td><td>The amount of RAM allocated to Droplets created of this size. The value is represented in megabytes.</td></tr><tr><td>vcpus</td><td>number</td><td>The number of virtual CPUs allocated to Droplets of this size.</td></tr><tr><td>disk</td><td>number</td><td>The amount of disk space set aside for Droplets of this size. The value is represented in gigabytes.</td></tr><tr><td>regions</td><td>array</td><td>An array containing the region slugs where this size is available for Droplet creates.</td></tr></tbody></table>
          </div>

          <!-- Attributes for this example -->
          
        </div>

        <div class="set-curl">
          <h3>List all Sizes</h3>
          <div class="block show" data-language="curl">
            <h4>cURL Example </h4>
            <pre><code>curl -X GET -H 'Content-Type: application/json' -H 'Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582' "https://api.digitalocean.com/v2/sizes"</code></pre>
            
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='curl -X GET -H &#39;Content-Type: application/json&#39; -H &#39;Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582&#39; &quot;https://api.digitalocean.com/v2/sizes&quot;' href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Requirements</h4>
            <pre><code class="highlightMe">require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)</code></pre>
            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text="require 'droplet_kit'
token='16f79fc8cd5adcfe528a0994311fa63cc877737b385b6ff7d12ed6684ba4fef5'
client = DropletKit::Client.new(access_token: token)" href='#'></a>
          </div>

          <div class="block" data-language="ruby">
            <h4>Ruby Example</h4>
            <pre><code class="highlightMe">client.sizes.all().each</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='client.sizes.all().each' href='#'></a>
          </div>

          <div class="block">
            <h4>Request Headers</h4>
            <pre><code>Content-Type: application/json<br>Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582<br>
            </code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='
Content-Type: application/json
Authorization: Bearer b7d03a6947b217efb6f3ec3bd3504582
' href='#'></a>
          </div>

          

          <!-- Response -->
          <div class="block">
            <h4>Response Headers</h4>

            
            <pre><code>content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 769
ratelimit-reset: 1415984218</code></pre>

            <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='content-type: application/json; charset=utf-8
status: 200 OK
ratelimit-limit: 1200
ratelimit-remaining: 769
ratelimit-reset: 1415984218' href='#'></a>
          </div>

          
            <div class="block">
              <h4>Response Body</h4>

              <pre><code class="highlightMe">{
  "sizes": [
    {
      "slug": "512mb",
      "memory": 512,
      "vcpus": 1,
      "disk": 20,
      "transfer": 1.0,
      "price_monthly": 5.0,
      "price_hourly": 0.00744,
      "regions": [
        "nyc1",
        "sgp1",
        "ams1",
        "ams2",
        "sfo1",
        "nyc2",
        "lon1",
        "nyc3",
        "ams3"
      ],
      "available": true
    },
    {
      "slug": "1gb",
      "memory": 1024,
      "vcpus": 1,
      "disk": 30,
      "transfer": 2.0,
      "price_monthly": 10.0,
      "price_hourly": 0.01488,
      "regions": [
        "nyc2",
        "sgp1",
        "ams1",
        "sfo1",
        "lon1",
        "nyc3",
        "ams3",
        "ams2",
        "nyc1"
      ],
      "available": true
    },
    {
      "slug": "2gb",
      "memory": 2048,
      "vcpus": 2,
      "disk": 40,
      "transfer": 3.0,
      "price_monthly": 20.0,
      "price_hourly": 0.02976,
      "regions": [
        "nyc2",
        "sfo1",
        "ams1",
        "sgp1",
        "ams2",
        "lon1",
        "nyc3",
        "ams3",
        "nyc1"
      ],
      "available": true
    },
    {
      "slug": "4gb",
      "memory": 4096,
      "vcpus": 2,
      "disk": 60,
      "transfer": 4.0,
      "price_monthly": 40.0,
      "price_hourly": 0.05952,
      "regions": [
        "nyc2",
        "sfo1",
        "ams1",
        "sgp1",
        "ams2",
        "lon1",
        "nyc3",
        "ams3",
        "nyc1"
      ],
      "available": true
    },
    {
      "slug": "8gb",
      "memory": 8192,
      "vcpus": 4,
      "disk": 80,
      "transfer": 5.0,
      "price_monthly": 80.0,
      "price_hourly": 0.11905,
      "regions": [
        "nyc2",
        "sfo1",
        "sgp1",
        "ams1",
        "ams2",
        "nyc1",
        "lon1",
        "nyc3",
        "ams3"
      ],
      "available": true
    },
    {
      "slug": "16gb",
      "memory": 16384,
      "vcpus": 8,
      "disk": 160,
      "transfer": 6.0,
      "price_monthly": 160.0,
      "price_hourly": 0.2381,
      "regions": [
        "sgp1",
        "nyc1",
        "sfo1",
        "ams2",
        "nyc3",
        "lon1",
        "nyc2",
        "ams1",
        "ams3"
      ],
      "available": true
    },
    {
      "slug": "32gb",
      "memory": 32768,
      "vcpus": 12,
      "disk": 320,
      "transfer": 7.0,
      "price_monthly": 320.0,
      "price_hourly": 0.47619,
      "regions": [
        "nyc2",
        "sgp1",
        "ams2",
        "nyc1",
        "sfo1",
        "lon1",
        "ams3",
        "nyc3"
      ],
      "available": true
    },
    {
      "slug": "48gb",
      "memory": 49152,
      "vcpus": 16,
      "disk": 480,
      "transfer": 8.0,
      "price_monthly": 480.0,
      "price_hourly": 0.71429,
      "regions": [
        "sgp1",
        "ams2",
        "sfo1",
        "nyc1",
        "lon1",
        "nyc2",
        "ams3",
        "nyc3"
      ],
      "available": true
    },
    {
      "slug": "64gb",
      "memory": 65536,
      "vcpus": 20,
      "disk": 640,
      "transfer": 9.0,
      "price_monthly": 640.0,
      "price_hourly": 0.95238,
      "regions": [
        "sgp1",
        "nyc1",
        "nyc2",
        "sfo1",
        "lon1",
        "ams3",
        "ams2",
        "nyc3"
      ],
      "available": true
    }
  ],
  "links": {
  },
  "meta": {
    "total": 9
  }
}</code></pre>

              <a class='copy' title='Copy to clipboard' data-placement='left' data-clipboard-text='{
  "sizes": [
    {
      "slug": "512mb",
      "memory": 512,
      "vcpus": 1,
      "disk": 20,
      "transfer": 1.0,
      "price_monthly": 5.0,
      "price_hourly": 0.00744,
      "regions": [
        "nyc1",
        "sgp1",
        "ams1",
        "ams2",
        "sfo1",
        "nyc2",
        "lon1",
        "nyc3",
        "ams3"
      ],
      "available": true
    },
    {
      "slug": "1gb",
      "memory": 1024,
      "vcpus": 1,
      "disk": 30,
      "transfer": 2.0,
      "price_monthly": 10.0,
      "price_hourly": 0.01488,
      "regions": [
        "nyc2",
        "sgp1",
        "ams1",
        "sfo1",
        "lon1",
        "nyc3",
        "ams3",
        "ams2",
        "nyc1"
      ],
      "available": true
    },
    {
      "slug": "2gb",
      "memory": 2048,
      "vcpus": 2,
      "disk": 40,
      "transfer": 3.0,
      "price_monthly": 20.0,
      "price_hourly": 0.02976,
      "regions": [
        "nyc2",
        "sfo1",
        "ams1",
        "sgp1",
        "ams2",
        "lon1",
        "nyc3",
        "ams3",
        "nyc1"
      ],
      "available": true
    },
    {
      "slug": "4gb",
      "memory": 4096,
      "vcpus": 2,
      "disk": 60,
      "transfer": 4.0,
      "price_monthly": 40.0,
      "price_hourly": 0.05952,
      "regions": [
        "nyc2",
        "sfo1",
        "ams1",
        "sgp1",
        "ams2",
        "lon1",
        "nyc3",
        "ams3",
        "nyc1"
      ],
      "available": true
    },
    {
      "slug": "8gb",
      "memory": 8192,
      "vcpus": 4,
      "disk": 80,
      "transfer": 5.0,
      "price_monthly": 80.0,
      "price_hourly": 0.11905,
      "regions": [
        "nyc2",
        "sfo1",
        "sgp1",
        "ams1",
        "ams2",
        "nyc1",
        "lon1",
        "nyc3",
        "ams3"
      ],
      "available": true
    },
    {
      "slug": "16gb",
      "memory": 16384,
      "vcpus": 8,
      "disk": 160,
      "transfer": 6.0,
      "price_monthly": 160.0,
      "price_hourly": 0.2381,
      "regions": [
        "sgp1",
        "nyc1",
        "sfo1",
        "ams2",
        "nyc3",
        "lon1",
        "nyc2",
        "ams1",
        "ams3"
      ],
      "available": true
    },
    {
      "slug": "32gb",
      "memory": 32768,
      "vcpus": 12,
      "disk": 320,
      "transfer": 7.0,
      "price_monthly": 320.0,
      "price_hourly": 0.47619,
      "regions": [
        "nyc2",
        "sgp1",
        "ams2",
        "nyc1",
        "sfo1",
        "lon1",
        "ams3",
        "nyc3"
      ],
      "available": true
    },
    {
      "slug": "48gb",
      "memory": 49152,
      "vcpus": 16,
      "disk": 480,
      "transfer": 8.0,
      "price_monthly": 480.0,
      "price_hourly": 0.71429,
      "regions": [
        "sgp1",
        "ams2",
        "sfo1",
        "nyc1",
        "lon1",
        "nyc2",
        "ams3",
        "nyc3"
      ],
      "available": true
    },
    {
      "slug": "64gb",
      "memory": 65536,
      "vcpus": 20,
      "disk": 640,
      "transfer": 9.0,
      "price_monthly": 640.0,
      "price_hourly": 0.95238,
      "regions": [
        "sgp1",
        "nyc1",
        "nyc2",
        "sfo1",
        "lon1",
        "ams3",
        "ams2",
        "nyc3"
      ],
      "available": true
    }
  ],
  "links": {
  },
  "meta": {
    "total": 9
  }
}' href='#'></a>
            </div>
          
        </div>
      </div>
    </div>

  









    </div>
  </div>
  <script src="/assets/as_doc/jquery-1.10.2.min-21daab25.js" type="text/javascript"></script>
  <script src="/assets/as_doc/scrollspy.min-2f1c4f84.js" type="text/javascript"></script>
  <script src="/assets/as_doc/ZeroClipboard.min-b40acf8f.js" type="text/javascript"></script>
  <script src="/assets/as_doc/tooltips.min-30a5b6c6.js" type="text/javascript"></script>
  <script src="/assets/as_doc/highlight.pack-3cec78af.js" type="text/javascript"></script>
  <script src="/assets/as_doc/docs-14162e9e.js" type="text/javascript"></script>
  <script src="/assets/as_doc/pikabu-ddd39532.js" type="text/javascript"></script>
  <script src="/assets/as_doc/mobile-menu-b2824345.js" type="text/javascript"></script>

    </div>
  </body>
</html>
