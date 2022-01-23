<!--Start of the Main Body Area -->
<main>
    <form action="includes/edit.inc.php" method="post" enctype="multipart/form-data">

      <h2>Profile Editor</h2>

      <label>Upload a Profile Picture</label><br />
      <input type="file" accept="image/*" onchange="loadFile(event);" name="profilePic" id="profile-selector"/>
      <label for="profile-selector">
      <img id="profile-picture" src="{PFPLINK}"/>
      </label><br>
      <script>
        var loadFile = function(event) {
          var output = document.getElementById('profile-picture');
          output.src = URL.createObjectURL(event.target.files[0]);
          output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
          }
        };
      </script>

      <label>Name</label><br />
      <input type="text" id="name" name = 'name' value ="{NAME}"/><br /><br />

      <label>Biography</label><br />
      <textarea rows="5" cols="50" name='biography' id="about-self" placeholder="Write a bit about yourself..." >{ABOUT}</textarea><br /><br />

      <label>Describe your works</label><br />
      <textarea rows="5" cols="50" name='works' id="about-works" placeholder="Write a bit about your works..." >{SUMMARY}</textarea><br /><br />

      <label>Upload a Work</label><br />
      <input type="file" name='work' accept=".pdf" /><br /><br />

      <label>Upload a Featured Work</label><br />
      <input type="file" name='featuredWork' accept=".pdf" /><br /><br />

      <input id="save-button" type="submit" name='submit' value="Submit Changes" />
    </form>
    <a class="button" href="recovery.php">Change Password</a>
</main>
