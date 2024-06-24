<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desa Wisata Cengek</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>

<x-navbar></x-navbar>
<x-header>Forum Diskusi</x-header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Selamat datang di Forum Diskusi</h2>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Apple Vision Pro: Game Changer Baru di Dunia AR/VR?</h5>
                            <p class="card-text"><img class="w-50 h-50 rounded border" src="https://pic1.calcalist.co.il/picserver3/crop_images/2024/01/01/Hy3ZOSlOT/Hy3ZOSlOT_0_200_2000_1126_0_x-large.jpg"></p>
                            <div class="py-2"><b>saltyFSIH</b> 2/15/2023 14:10:44</div>
                            <p class="card-text">Baru aja rilis nih guys, kacamata AR/VR dari Apple, Vision Pro. Harganya sih fantastis, Rp 52 juta, tapi katanya sih fiturnya canggih banget. Ada yang udah nyobain? Gimana menurut kalian?</p>
                            <p class="card-text">Gue sih penasaran banget sama fitur passthrough-nya yang bikin kita bisa ngelihat dunia nyata tanpa melepas kacamata. Keren gak tuh? 🤔</p>
                            <div class="card-text">
                            </div>
                            <form id="commentForm" data-target-card="commentContainer">
                                <div class="form-group">
                                    <label for="comment">Tambah Komentar:</label>
                                    <input type="text" class="form-control" id="comment" name="comment">
                                </div>
                                <button type="submit" class="btn btn-secondary">Kirim</button>
                            </form>
                            <p></p>
                            <p class="px-2">52 replies and 6 images omitted. Click <b style="color:blue;">here</b> to view.<p>
                            <div class="card">
                                <div class="px-3 py-2"><b style="color:red;">kadalkudaterbang</b> (BANNED) 2/15/2023 16:32:01</div>
                                <div class="px-3 py-1">Enak aja lu Gue yakin lu cuma sok-sok mau pamer doang, dasar an**** b*******!</div>
                            </div>
                            <div class="card">
                                <div class="px-3 py-2"><b>cekzik</b> 2/15/2023 16:33:52</div>
                                <div class="px-3 py-1">Masih nabung, passthrough-nya emang menggoda banget sih</div>
                            </div>
                            <div id="commentContainer">
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body" id="commentContainer2">
                            <h5 class="card-title">Toilet rusak</h5>
                            <p class="card-text"><img class="w-50 h-50 rounded border" src="https://www.shutterstock.com/image-photo/broken-toilet-seat-left-haphazardly-600nw-1858837195.jpg"></p>
                            <div class="py-2"><b>cicukciaksic</b> 2/15/2023 16:28:02</div>
                            <p class="card-text">Why?</p>
                            <div class="card-text">
                            </div>
                            <form id="commentForm" data-target-card="commentContainer2">
                                <div class="form-group">
                                    <label for="comment">Tambah Komentar:</label>
                                    <input type="text" class="form-control" id="comment" name="comment">
                                </div>
                                <button type="submit" class="btn btn-secondary">Kirim</button>
                            </form>
                            <p></p>
                            <div class="card">
                                <div class="px-3 py-2"><b>klololo134</b> 2/15/2023 16:30:32</div>
                                <div class="px-3 py-1">rajelas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const commentForms = document.querySelectorAll('form[id^="commentForm"]'); // Select all forms starting with "commentForm"
        
        commentForms.forEach(form => {
          form.addEventListener('submit', function(event) {
            event.preventDefault(); 
        
            const commentText = this.querySelector('#comment').value; 
            const currentDate = new Date();
            const formattedDate = currentDate.toLocaleDateString() + ' ' + currentDate.toLocaleTimeString('en-GB');
        
            // Get the target comment container
            const commentContainerId = this.dataset.targetCard; 
            const commentContainer = document.getElementById(commentContainerId);
        
            // Create the new card element
            const newCard = document.createElement('div');
            newCard.classList.add('card-text');
            newCard.innerHTML = `
                <div class="card">
                    <div class="px-3 py-2"><b style="color:green;">Radit</b> ${formattedDate}</div>
                    <div class="px-3 py-1">${commentText}</div>
                </div>
            `;
        
            // Add the new card to the container
            commentContainer.append(newCard); 
        
            // Reset the form
            this.reset(); 
          });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>