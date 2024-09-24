 <!-- Footer Part  -->

 <div class="container bg-white mt-5 ">
        <div class="row">
            <div class="col-lg-4 p-4 ">
                <h3>Livein Hotel</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam nisi quos repellendus neque aliquid praesentium ea quaerat ad inventore laborum.
                </p>

            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Facilities</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">Contact us</a><br>
                <a href="#" class="d-inline-blok mb-2 text-dark text-decoration-none">About</a>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter"></i> Twitter
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook"></i> facebook
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram"></i> Instragram
                    </span>
                </a>

            </div>
        </div>
    </div>

    <!-- My Creation -->
    <div class="text-center bg-dark text-white p-2 m-0">
            

            <p>
                <strong>
                    Copyright &copy;2012-<span id="currentYear"></span>, <span id="formattedDate"></span> at <span id="formattedTime"></span>, GMT+5:30 ,<a href="https://krishnendudalui.in.net/webvilla/">KRISHNENDU @ KRISHNENDU</a>.
                </strong>
                All rights reserved.
            </p>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
     <!-- Footer part My creation-->
 
<script>
        function updateDateTime() {
            const now = new Date();
            
            // Format date (e.g., August 14)
            const dateOptions = { month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('en-US', dateOptions);
            document.getElementById('formattedDate').textContent = formattedDate;
            
            // Format time (e.g., 09:59:43 PM)
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit', 
                hour12: true 
            };
            const formattedTime = now.toLocaleTimeString('en-US', timeOptions);
            document.getElementById('formattedTime').textContent = formattedTime;

            // Set the current year
            document.getElementById('currentYear').textContent = now.getFullYear();
        }

        // Update date and time when the page loads
        updateDateTime();

        // Optional: Update every second to keep time current
        setInterval(updateDateTime, 1000);
    </script>
