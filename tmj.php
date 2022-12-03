<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="contservices.scss">
    <title>TMJ - Zafreen Dental Clinic</title>
</head>
<body>
    <div class="head">
            <div class="head-desc">
                <p>Emergency Cases: 1-800-700-6200</p>
            </div>
            <div class="head-social">
                <p>Follow us on:</p>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>

        <header class="header">
            <section class="flex">
                <a href="index.html" class="logo"><img src="img/logo.png" /></a>

                <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="services.php">Services</a>
                <a href="appoint.php">Make an Appointment</a>
                <a href="contact.php">Contact Us</a>
                <div class="welcome" style="text-align: center; margin: 0 5rem;"><?php echo "<h1 style='font-size: var(--p); text-align: center; margin-bottom: 0;' margin-left: 2rem;>Welcome</h1> " . "<a href='profile.php' style='text-decoration: none; color: var(--purple); font-weight: 800; margin: 0;'>" . $_SESSION['username']; "</a>" ?></div>
                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
            </section>
        </header>

        <div class="content">
            <div class="content-title">
                <h1>Our Services</h1>
                <hr>
            </div>
            <div class="content-desc">
                <h1>TMJ</h1>
                <p><b>TMJ Disorders Therapy</b> - Temporomandibular Joint Disorders (TMJ) can severely affect a patient's nerves, muscles, teeth, and bone. The treatment for such is complex and often need professional analysis to create a treatment plan. GAOC's highly experienced dentists can provide customized therapies to help patients suffering from TMJ disorders.
                <br><br>
                <b>Bruxism or teeth grinding</b> - is a serious condition that could severely damage the patient's teeth. Aside from treating the symptoms of the disease, GAOC Orthodontists provide effective prevention techniques in the form of mouth guards and splints or mandibular advancement devices (MADs). These items can effectively safeguard the patient's teeth from teeth grinding at night.</p>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var recipient = button.getAttribute('data-bs-whatever')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal.querySelector('.modal-title')
                var modalBodyInput = exampleModal.querySelector('.modal-body input')
                modalTitle.textContent = 'New message to ' + recipient
                modalBodyInput.value = recipient
            });
        </script>
</body>
</html>