<?php
#Variable that is used to set the title of the page.
$PageTitle = "Consortium - About";

function customPageHeader()
{ ?>
    <!-- Place custom HTML for the head tag here -->
    <link rel="stylesheet" href="css/about.css" />
<?php }
include_once('header.php');
?>

<main>
    <div class="main">
        <h1>
            About Us
        </h1>

        <div id = main>
        <p>
            <h3>
            Who We Are
            </h3> 
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nibh nisi, finibus condimentum risus a,
                euismod congue neque. Ut molestie arcu convallis augue tempus eleifend. Sed cursus quam eget purus
                consectetur, vitae mollis mi molestie. Praesent ornare pellentesque neque vel laoreet. Donec in sapien
                et
                eros mollis malesuada vitae in metus. Donec consectetur, elit sed maximus convallis, magna nunc aliquam
                felis, at tincidunt quam risus in metus. Praesent sodales purus neque, vitae molestie erat tristique
                eget.
                Duis semper tellus lacinia luctus pretium. Cras iaculis sapien sit amet nisi placerat, non lobortis orci
                placerat.

                Duis tincidunt ut tortor sed tempor. Phasellus eget aliquam urna. Nam consequat posuere justo vel
                interdum.
                In quis nisi porta, sagittis felis ut, maximus est. Suspendisse potenti. Ut placerat elit ac mauris
                cursus
                tincidunt sed et urna. In hac habitasse platea dictumst. Vestibulum ante ipsum primis in faucibus orci
                luctus et ultrices posuere cubilia curae; Phasellus sodales, justo id laoreet molestie, lorem nulla
                blandit
                sem, sit amet interdum enim orci egestas purus.
        </div>
        
        <h3>
            What We Do
        </h3>
        <p>
            We are a group of student, composers and performers, that create and perform orginial works. We create works
            from all kinds of styles. To put on a performance we need composers and Performers.
        </p>
        

        <div id = types>
        
            <div id = right>
                
                <h2>
                Composers
                </h2>

                <img class = peopleTypesImages src="images/CMW-picture.jpg">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna tellus, volutpat in lacinia
                    pellentesque, congue eu arcu. Phasellus cursus augue a turpis vulputate pulvinar. Nulla vitae scelerisque
                    mauris. Nullam quis est rhoncus, fermentum lorem quis, finibus tellus. Donec ullamcorper euismod velit sit
                    amet scelerisque. Sed placerat commodo neque, quis luctus ligula feugiat et. Donec tristique gravida nibh.
                    Nulla ac commodo eros, id bibendum purus. Etiam consequat mattis sagittis. Sed ut elementum diam. Aliquam
                    tempus posuere libero in egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </div>

            <div id = left>

                <h2>
                    Performers
                </h2>

                <img class = peopleTypesImages src="images/performing.jpg">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna tellus, volutpat in lacinia
                    pellentesque, congue eu arcu. Phasellus cursus augue a turpis vulputate pulvinar. Nulla vitae scelerisque
                    mauris. Nullam quis est rhoncus, fermentum lorem quis, finibus tellus. Donec ullamcorper euismod velit sit
                    amet scelerisque. Sed placerat commodo neque, quis luctus ligula feugiat et. Donec tristique gravida nibh.
                    Nulla ac commodo eros, id bibendum purus. Etiam consequat mattis sagittis. Sed ut elementum diam. Aliquam
                    tempus posuere libero in egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </p>
            </div>
        </div>
    
        <h2>
            <br>
            Interested in becoming a composer or a performer, Get Involved!
        </h2>
        
        <p>
            <br>
            If you are interested in creating unique pieces of music, we are looking for people.
            If playing music is more your style, we are always interested looking for performers.

            <br>
            <a style = " color: darkkhaki; = " class="auth-page-links" href="signup.php">Come check us out some time! -> Sign Up</a> 

        </p>
    
    </div>
</main>

<?php include_once('footer.php'); ?>