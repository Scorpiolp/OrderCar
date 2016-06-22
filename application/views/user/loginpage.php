<style>
    .get {
      background: #D5D5D5;
      color: #1E5B94;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 100%;
      border: 2px;
      padding: 10px;
      display: inline-block;
    }

    .get-btn {
      background: #1E5B94;
    }
	
	.get-center {
	  text-align: center;
	}
  </style>
<div class='get'>
<div class="am-g am-g-fixed"  >
    <form name="contactForm" class="am-form am-form-horizontal" method="post" action="/index.php/Custom/logresult">

        <div class="get-title">
            <h1 style="font-size:36px;">Log in</h1>
            <p>Fill out the form below to login. </p>
        </div>


        <div class="am-form-group">
            <label for="doc-ipt-1" class="am-u-sm-3 am-form-label">Phone *</label>
            <div class="am-u-sm-9">
                <input name="phone" type="text" id="doc-ipt-1">
            </div>
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-3" class="am-u-sm-3 am-form-label">Password *</label>
            <div class="am-u-sm-9">
                <input name="password" type="password" id="doc-ipt-3">
            </div>
        </div>


        <p></p>

        <div class="am-form-group" >
                <button name="submit" type="submit" class="am-btn am-btn-primary">Submit</button>
                <a name="Register" type="Register" class="am-btn am-btn-default" href="/index.php/Custom/signup">Sign up</a>
        </div>
        <p>&nbsp;</p>

    </form>
</div>
</div>