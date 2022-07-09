<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content=
  "width=device-width, initial-scale=1.0" />

<!-- font-awesome library to make the
  webpage more appealing -->
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- Internal CSS styling -->
<style>
  .content {
  text-align: center;
  padding: 30px;
  margin: 0px auto;
  }

  .details {
  margin-left: auto;
  margin-right: auto;
  }

  img {
  border-radius: 5px;
  box-shadow: black;
  }

  table,
  td {
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  padding: 10px;
  border: 1px solid black;
  }
</style>
</head>

<body>
<div class="content">
  <div class="head">
  <h1 id="head"></h1>
  </div>
  <div class="email">
  <i class="fa fa-envelope" style=
    "font-size: 15px; color: blue;"></i>
  <a href="" id="email"> </a>
  </div>
  <div class="phone">
  <i class="fa fa-phone" style=
    "font-size: 15px; color: blue;"></i>
  <a href="" id="phone"> </a>
  </div>
  <br />
  <div id="user-img"></div>
  <br />

  <div class="details">
  <table>
    <tr>
    <td>Age</td>
    <td><span id="age"></span></td>
    </tr>
    <tr>
    <td>Gender</td>
    <td><span id="gender"></span></td>
    </tr>
    <tr>
    <td>Location</td>
    <td><span id="location"></span></td>
    </tr>
    <tr>
    <td>Country</td>
    <td><span id="country"></span></td>
    </tr>
  </table>
  <iframe id="testing" width="640px" height="480px" src="about:blank" frameborder="0" marginwidth="0" marginheight="0" style="border: none; max-width:100%; max-height:100vh" allowfullscreen webkitallowfullscreen mozallowfullscreen msallowfullscreen> </iframe>
</div>
</body>
<script>
async function getUser() {
  let _data = {
    "apiKey": "6b9b91e5-6403-41c1-b364-b20a2546d435",
    "firstName": "Bill",
    "lastName": "Gates",
    "phone": "0123456789",
    "email": "bill.ga@yopmail.com"
  }
  // Making an API call (request)
  // and getting the response back
  const response = await fetch('https://unified.apiservice.dev.cads.ai/api/v1/tenant/handshake', {
    method: "POST",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
  })
  // Parsing it to JSON format
  const result = await response.json();
  console.log(result.data);
  // Retrieving data from JSON
  let generatedurl = result.data;
  document.title = generatedurl;
  // Accessing the div container and modify/add
  // elements to the containers
  document.getElementById("head").innerHTML = generatedurl;
  document.getElementById("testing").src = generatedurl;
}
// Calling the function
getUser();
</script>

</html>

  </div>
</div>
</body>
<script>

async function getUser() {

  let _data = {
    "apiKey": "6b9b91e5-6403-41c1-b364-b20a2546d435",
    "firstName": "Bill",
    "lastName": "Gates",
    "phone": "0123456789",
    "email": "bill.ga@yopmail.com"
  }

  // Making an API call (request)
  // and getting the response back
  const response = await fetch('https://unified.apiservice.dev.cads.ai/api/v1/tenant/handshake', {
    method: "POST",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8",
              "User-Agent": "PostmanRuntime/7.29.2",
              "Accept": "*/*",
              "Accept-Encoding": "gzip, deflate, br",
              "Connection": "keep-alive"
             }
  })

  // Parsing it to JSON format
  const result = await response.json();
  console.log(result.data);

  // Retrieving data from JSON
  let generatedurl = result.data;

  document.title = generatedurl;

  // Accessing the div container and modify/add
  // elements to the containers
  document.getElementById("head").innerHTML = generatedurl;

  window.open(generatedurl, "_self");

}

// Calling the function
getUser();
</script>

</html>
