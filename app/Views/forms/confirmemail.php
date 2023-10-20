<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
*{ margin: 0; padding: 0;}
*, *::before, *::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

body{
  min-height: 100vh;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
 
  align-content: flex-start;
    
  font-family: 'Roboto', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-smoothing: antialiased;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
  font-size: 15px;
  background: #eee;
}
.cd__intro{
   padding: 60px 30px;
   margin-bottom: 15px;
        flex-direction: column;

}
.cd__intro,
.cd__credit{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    background: #fff;
    color: #333;
    line-height: 1.5;
    text-align: center;
}

.cd__intro h1 {
   font-size: 18pt;
   padding-bottom: 15px;

}
.cd__intro p{
   font-size: 14px;
}

.cd__action{
   text-align: center;
   display: block;
   margin-top: 20px;
}

.cd__action a.cd__btn {
  text-decoration: none;
  color: #666;
   border: 2px solid #666;
   padding: 10px 15px;
   display: inline-block;
   margin-left: 5px;
}
.cd__action a.cd__btn:hover{
   background: #666;
   color: #fff;
    transition: .3s;
-webkit-transition: .3s;
}
.cd__action .cd__btn:before{
  font-family: FontAwesome;
  font-weight: normal;
  margin-right: 10px;
}
.down:before{content: "\f019"}
.back:before{content:"\f112"}

.cd__credit{
    padding: 12px;
    font-size: 9pt;
    margin-top: 40px;

}
.cd__credit span:before{
   font-family: FontAwesome;
   color: #e41b17;
   content: "\f004";


}
.cd__credit a{
   color: #333;
   text-decoration: none;
}
.cd__credit a:hover{
   color: #1DBF73; 
}
.cd__credit a:hover:after{
    font-family: FontAwesome;
    content: "\f08e";
    font-size: 9pt;
    position: absolute;
    margin: 3px;
}
.cd__main{
  background: #fff;
  padding: 20px;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  
}
.cd__main{
    display: flex;
    width: 100%;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
  img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; }
      body {
        background-color: #f6f6f6;
        font-family: 'Poppins', sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; }
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family:'Poppins', sans-serif;
          font-size: 14px;
          vertical-align: top; }
   .body {
        background-color: #f6f6f6;
        width: 100%; }
    .container {
        display: block;
        Margin: 0 auto !important;
        max-width: 580px;
        padding: 10px;
        width: 580px; }
      .content {
        box-sizing: border-box;
        display: block;
        Margin: 0 auto;
        margin-top: 100px;
        max-width: 580px;
        padding: 10px; }
      .main {
        background:background: #334d50; 
background: -webkit-linear-gradient(45deg, #cbcaa5, #acb6e5); 
               background: linear-gradient(90deg, #cbcaa5, #acb6e5); 
; border-radius: 6px;
        width: 100%; }
      .wrapper {
        box-sizing: border-box;
        padding: 20px; }
      .footer {
        clear: both;
        padding-top: 10px;
        text-align: center;
        width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; }
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        Margin-bottom: 30px; }
      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; }
      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        Margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; }
      a {
        color: #3498db;
        text-decoration: underline; }
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; }
      .btn-primary table td {
        background-color: #3498db; }
      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; }
      .last {
        margin-bottom: 0; }
      .first {
        margin-top: 0; }
      .align-center {
        text-align: center; }
      .align-right {
        text-align: right; }
      .align-left {
        text-align: left; }
      .clear {
        clear: both; }
      .mt0 {
        margin-top: 0; }
      .mb0 {
        margin-bottom: 0; }
      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; }
      .powered-by a {
        text-decoration: none; }
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        Margin: 20px 0; }

      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; }
        table[class=body] .content {
          padding: 0 !important; }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; }
        table[class=body] .btn table {
          width: 100% !important; }
        table[class=body] .btn a {
          width: 100% !important; }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; }}
      @media all {
        .ExternalClass {
          width: 100%; }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; } 
        .btn-primary table td:hover {
          background-color: #34495e !important; }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; } }

@media only screen and (min-width: 1360px){
    .cd__main{
      max-width: 1280px;
      margin-left: auto;
      margin-right: auto; 
      padding: 24px;
    }
}
    </style>    
   
  </head>
  <body class="">
    <table border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <table class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <h1>Confirm your email</h1>
                        <h2>You are just one step away</h2>
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td> <a href="<?= base_url('/verify_token?token='.$token . "&user_id=" . $user_id) ?>" >confirm email</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <p>If you received this email by mistake, simply delete it. You won't be subscribed if you don't click the confirmation link above.</p>
      
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            
            <!-- END FOOTER -->
            
          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
         <!-- END EDMO HTML (Happy Coding!)-->
      </main>
      
      <!--$%analytics%$-->
   </body>
</html>