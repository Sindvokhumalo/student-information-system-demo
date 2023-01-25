<html>
    <head>
     <title></title>
     <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <form method="post" action="script.php">
        
    <header class="header-tops"><button class="btn btn-primary" id="btnHome" type="button"><strong>Home Page</strong></button></header>
    <section class="title">
        <h2 class="text-center"><strong>Student Information System</strong></h2>
    </section>
    <section class="details"><input type="text" class="text-input" name ="student_id" placeholder="Enter your ID Number Here">
        <input type="text" class="text-input" name="name" placeholder="Enter your Name Here">
        <input type="text" class="text-input" name="surname" placeholder="Enter your Surname Here">
        <input type="email" class="text-input" name ="email" placeholder="Enter your Email Here">
        <select class="d-sm-flex justify-content-sm-end text-input" id="select-faculty" name="faculty" title="Please select your faculty">
            <optgroup label="Select Your Faculty">
            <option value="12" selected="">........................................................................................................Select your Faculty Here</option>
            <option value="FICT">Faculty of Information Communication Technology</option>
            <option value="FDI">Faculty of Design and Innovation</option>
            <option value="FBG">Faculty of Busiiness and Globalization</option>
        </optgroup>
    </select>

        <input type="text" class="text-input" name="phone_number" placeholder="Enter Your Phone Number Here">
    </section>

    <section class="section-radBtn">
    <div>
                <label>
                   <input type="radio" name="gender" value="Female">Female
                </label>
                <label>
                    <input type="radio" name="gender" value="Male">Male
                </label>
            </div>
    </section>

          <section class="section-btns">
        <button class="btn btn-primary" id="btnSave" type="submit">
            <strong>Save</strong></button>
        <button class="btn btn-primary" id="btnClear" type="reset">
                <strong>Clear</strong>


            </button>
            </section>
    
</body>
</html>