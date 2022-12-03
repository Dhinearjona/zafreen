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
    <title>Cosmetics Dentistry - Zafreen Dental Clinic</title>
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
                <h1>Cosmetics Dentistry</h1>
                <img src="img/cosmetics.jpg" />
                <p>Teeth Whitening GAOC uses plasma arc blue light technology that activates a specially formulated gel to whiten teeth. This is an effective procedure that whitens discolored or stained teeth with the latest and safest technology.
                <br><br>
                Restorative Dentistry refers to the restoration of teeth using fillings. Dental cavities are treated with amalgam or tooth-colored fillings. The latter is specially made to match the color of your teeth.
                <br><br>
                Restorative Teeth Bonding closes tooth gaps and chips, as well as eliminate spots and discolorations. It is also used to fill small cavities or to cover the entire outside surface of a tooth. Teeth bonding uses tooth-colored materials or composites made of synthetic resin. A bonded tooth could be completed in a single office visit and could last for several years.
                <br><br>
                Dental Veneers are used to cover the front teeth to change their color or shape. They can cover chipped, discolored, oddly shaped, unevenly placed, or crooked teeth, as well as those with uneven surfaces. Veneers use thin pieces of porcelain or plastic that are bonded with the teeth to produce aesthetically pleasing results.
                <br><br>
                Prosthodontics It's important to have beautiful teeth to have a winning smile. With this, you can leave a lasting impression. Patients with missing teeth benefit from prosthodontics. This is the branch of dentistry that deals with the treatment and appearance of patients with missing or deficient teeth by providing oral maxillofacial tissues using biocompatible substitutes. GAOC offers the following techniques to give patients a full set of healthy pearly whites:
                <br><br>
                Dental Crown is generally used to replace a single missing tooth. It could also cover a tooth to improve its appearance and restore shape, size, and strength.
                <br><br>
                Bridge is a type of dental restoration used to replace a missing tooth by joining it permanently to adjacent teeth or dental implants. It works well for areas that have two or more missing teeth.
                <br><br>
                Dentures can be full or partial. They are used to replace missing teeth. They could be permanent, which requires professional help to be removed, or removable, which allow patients to remove them with ease.
                <br><br>
                Gum Recontouring GAOC experts offer laser gum treatment to reshape and lift gums. The procedure is used to correct minor amounts of excessive gum tissue that results to a “gummy” or uneven smile. The laser will alter the gum's shape and size to improve its overall appearance. Oftentimes, only one laser treatment is needed to fix a gummy smile.</p>
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