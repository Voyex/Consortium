<!--Start of the Main Body Area -->
<main>
    <div class="main">
        <div>
            <div>
                <div>
                    <img src={PFPLINK} alt='Profile Picture'>

                    <h2>{NAME}</h2>

                    <p>
                    <h2><br>About You</h2>
                    {ABOUT}
                    </p>

                </div>

                <h2>
                    Summary of Previous works
                </h2>
                <p>
                    {SUMMARY}
                </p>
            </div>
            <a class="works-button" href={SCORESLINK}>All Works</a>


        </div>
    </div>
    <!--Start of the Right Column -->
    <div class="side">
        {EDIT}

        <h2>
            Featured Work
            <br>
        </h2>

        <div id="previousWorks">
           {FEATUREDLINK}
        </div>

    </div>
</main>