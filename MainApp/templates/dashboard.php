

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    <title>AdminHub</title>
</head>

<body>
    <input type="checkbox" name="" id="menu-toggle">
    <div class="sidebar">
        <div href="#" class="brand">
            <i class="ri-user-smile-fill"></i>
            <h3>AdminHub</h3>
        </div>
        <div class="sidemenu" id="sidemenu">
            <div class="side-user">
                <div class="user">
                    <p><?php echo $_SESSION['fullname']; ?></p>
                    <small>Administrator</small>

                </div>
            </div>
            <ul>
                <li class="active" id="menu">
                    <a href="#dashboard">
                        <i class="ri-dashboard-fill"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>

                <li id="menu">
                    <a href="#update">
                        <i class="ri-refresh-fill"></i>
                        <span>Les mis a jour</span>
                    </a>
                </li>

                <li id="menu">
                    <a href="#members">
                        <i class="ri-group-fill"></i>
                        <span>le membres</span>
                    </a>
                </li>

                <li id="menu">
                    <a href="signup.html">
                        <i class="ri-user-add-fill"></i>
                        <span>Ajouter d'utilisateurs</span>
                    </a>
                </li>
                <li id="menu">
                    <a href="EgliseMat.Management@gmail.com/inbox" id="menu">
                        <i class="ri-message-fill"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li id="menu">
                    <a href="">
                        <i class="ri-refresh-line"></i>
                        <span>Deconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <label for="menu-toggle" class="menu-toggler">
                <i class="ri-menu-fill"></i>
            </label>
            <div class="search">
                <input type="search" name="" id="" placeholder="search...">
                <i class="ri-search-line"></i>
            </div>
            <div class="icons">
                <i class="ri-notification-fill"></i>
                <i class="ri-bookmark-fill"></i>
                <i class="ri-live-fill"></i>
            </div>
        </header>

        <main>
            <div class="dashboard" id="dashboard">
                <div class="cards">
                    <div class="card">
                        <div class="card-icon follow">
                            <i class="ri-group-line"></i>
                        </div>
                        <div class="card-info">
                            <h2>3,281</h2>
                            <small>membres</small>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-icon like">
                            <i class="ri-refresh-line"></i>
                        </div>
                        <div class="card-info">
                            <h2>3,281</h2>
                            <small>les mis a jour</small>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-icon comment">
                            <i class="ri-user-add-line"></i>
                        </div>
                        <div class="card-info">
                            <h2>3,281</h2>
                            <small>utilisateurs</small>
                        </div>

                    </div>

                    <div class="card">
                        <div class="card-icon message">
                            <i class="ri-message-line"></i>
                        </div>
                        <div class="card-info">
                            <h2>3,281</h2>
                            <small>messages recents</small>
                        </div>

                    </div>
                </div>

                <div class="section-chart">
                    <div class="analysis"></div>
                    <div class="pie-analysis"></div>
                </div>

            </div>

            <div class="update" id="update">
                <div class="cards">
                    <div class="card">
                        <h3 class="header">home image</h3>
                        <input type="file" name="" id="">
                        <button class="btn">update</button>
                        <span> message</span>

                    </div>

                    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <h3 class="header">About Image</h3>
                            <input type="file" name="image" id="imageInput">
                            <button type="submit" class="btn" name="upload">Upload Image</button>
                        </div>
                    </form>





                    <div class="card">
                        <h3 class="header">contact image</h3>
                        <input type="file" name="" id="">
                        <button class="btn">update</button>
                        <span> message</span>

                    </div>

                    <div class="card">
                        <h3 class="header">offering image</h3>
                        <input type="file" name="" id="">
                        <button class="btn">update</button>
                        <span> message</span>

                    </div>
                </div>


                <div class="event">
                    <div class="cards">
                        <form method="POST" action="process.php">
                        <div class="card">
                            <h3 class="header">first event</h3>
                            <input type="file" name="" id="">
                            <div class="description">
                                <input type="text" name="" id="" placeholder="Event title">
                                <input type="text" name="" id="" placeholder="Event Caption">
                            </div>
                            <textarea name="" id="" cols="20" rows="5">add event description</textarea>
                            <button class="btn" type="submit" name="form1_submit" >update</button>
                        </div>



                        <div class="card">
                            <h3 class="header">second event</h3>
                            <input type="file" name="" id="">
                            <div class="description">
                                <input type="text" name="" id="" placeholder="Event title">
                                <input type="text" name="" id="" placeholder="Event Caption">
                            </div>
                            <textarea name="" id="" cols="20" rows="5">add event description</textarea>
                            <button class="btn">update</button>
                        </div>

                        <div class="card">
                            <h3 class="header">third event</h3>
                            <input type="file" name="" id="">
                            <div class="description">
                                <input type="text" name="" id="" placeholder="Event title">
                                <input type="text" name="" id="" placeholder="Event Caption">
                            </div>
                            <textarea name="" id="" cols="20" rows="5">add event description</textarea>
                            <button class="btn">update</button>
                        </div>

                        <div class="card">
                            <h3 class="header">the lastest sermon</h3>
                            <h5 class="text-show">provide the thumbnail</h5>
                            <input type="file" name="" id="">
                            <div class="description">
                                <input type="text" name="" id="" placeholder="Serie title">
                                <input type="text" name="" id="" placeholder="Sermon Title">
                            </div>
                            <div class="description">
                                <input type="text" name="" id="" placeholder="speaker">
                                <input type="text" name="" id="" placeholder="the video link">
                            </div>
                            <button class="btn">update</button>
                        </div>

                    </div>

                </div>

                <div class="multiple-upload">
                    <div class="upload-card">
                        <h4>upload quotes file</h4>

                        <input type="file" name="" id="file-input" multiple>
                        <label for="file-input">
                            <i class="ri-upload-cloud-fill"></i>
                            &nbsp; choose files to upload
                        </label>
                        <div id="num-of-files">No file choosen</div>

                        <ul id="file-list">

                        </ul>

                    </div>
                    <div class="upload-card">
                        <h4>upload gallery picture</h4>

                        <input type="file" name="" id="file-input-1" multiple>
                        <label for="file-input-1">
                            <i class="ri-upload-cloud-fill"></i>
                            &nbsp; choose files to upload
                        </label>
                        <div id="num-of-files-1">No file choosen</div>

                        <ul id="file-list-1">

                        </ul>


                    </div>
                    <form method="post" action="assets/php/save_iframe.php">
                        <div class="upload-card">
                            <div class="input-box">
                                <h3 class="upload-area-title">Provide the direct link</h3>
                                <p style="color: gray;">Paste the link</p>
                                <textarea name="iframe_code" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="filewrapper">
                                <button type="submit" class="btn">Upload</button>
                            </div>
                        </div>
                    </form>

                </div>


                <div class="members" id="members">
                    <div class="card-table">
                        <div class="order">
                            <div class="head">
                                <h3>List of Members</h3>
                                <i class="ri-search-line"></i>

                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Member</th>
                                        <th>subscription date</th>
                                        <th>mail address</th>
                                        <th>Select</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <tr>
                                        <td class="table-user">
                                            <img src="./assets/images/imr-past.jpg" alt="" height="40px" width="auto">
                                            <p>
                                                john Doe
                                            </p>
                                        </td>
                                        <td class="date">01-02-2024</td>
                                        <td class="email">johnDoe@gmail.com</td>
                                        <td class="check"><input type="checkbox"></td>
                                    </tr>


                                    <tr>
                                        <td class="table-user">
                                            <img src="./assets/images/imr-past.jpg" alt="" height="40px" width="auto">
                                            <p>
                                                john Doe
                                            </p>
                                        </td>
                                        <td class="date">01-02-2024</td>
                                        <td class="email">johnDoe@gmail.com</td>
                                        <td class="check"><input type="checkbox"></td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="./assets/images/imr-past.jpg" alt="" height="40px" width="auto">
                                            <p>
                                                john Doe
                                            </p>
                                        </td>
                                        <td class="date">01-02-2024</td>
                                        <td class="email">johnDoe@gmail.com</td>
                                        <td class="check"><input type="checkbox"></td>
                                    </tr>


                                    <tr>
                                        <td class="table-user">
                                            <img src="./assets/images/imr-past.jpg" alt="" height="40px" width="auto">
                                            <p>
                                                john Doe
                                            </p>
                                        </td>
                                        <td class="date">01-02-2024</td>
                                        <td class="email">johnDoe@gmail.com</td>
                                        <td class="check"><input type="checkbox"></td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="./assets/images/imr-past.jpg" alt="" height="40px" width="auto">
                                            <p>
                                                john Doe
                                            </p>
                                        </td>
                                        <td class="date">01-02-2024</td>
                                        <td class="email">johnDoe@gmail.com</td>
                                        <td class="check"><input type="checkbox"></td>
                                    </tr>


                                    <tr>
                                        <td class="table-user">
                                            <img src="./assets/images/imr-past.jpg" alt="" height="40px" width="auto">
                                            <p>
                                                john Doe
                                            </p>
                                        </td>
                                        <td class="date">01-02-2024</td>
                                        <td class="email">johnDoe@gmail.com</td>
                                        <td class="check"><input type="checkbox"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-message">
                        <h3>Message</h3>
                        <div class="content-message">
                            <label for="">To:</label>
                            <input type="email" name="" id="" placeholder="address mail">
                            <label for="">subject:</label>
                            <input type="text" name="" id="" placeholder="subject">
                            <textarea name="" id="" placeholder="write your message here"></textarea>
                            <button class="btn">send</button>
                        </div>
                    </div>
                </div>

            </div>

    </div>



    </main>

    <div class="footer__bar">
        copyright C 2024 tignelNbg.All right reserved.
    </div>

    <script>

        // Function to create an upload button if it doesn't exist
        function createUploadButton(fileListContainer) {
            let existingUploadButton = fileListContainer.parentNode.querySelector(".upload-button");
            if (!existingUploadButton) {
                let uploadButton = document.createElement("button");
                uploadButton.textContent = "Upload";
                uploadButton.className = "btn upload-button";
                uploadButton.onclick = () => {
                    // Your upload logic here
                    console.log("Upload button clicked");
                };
                fileListContainer.parentNode.appendChild(uploadButton);
            }
        }

        // Function to handle file input change
        function handleFileInputChange(fileInput, fileList, numOfFiles) {
            fileInput.addEventListener("change", () => {
                fileList.innerHTML = "";
                numOfFiles.textContent = `${fileInput.files.length} Files Selected`;

                createUploadButton(fileList);

                for (let i of fileInput.files) {
                    let reader = new FileReader();
                    let listItem = document.createElement("li");
                    let fileName = i.name;
                    let fileSize = (i.size / 1024).toFixed(1);
                    listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}KB</p>`;

                    if (fileSize >= 1024) {
                        fileSize = (fileSize / 1024).toFixed(1);
                        listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}MB</p>`;
                    }
                    fileList.appendChild(listItem);
                }
            });
        }

        // For the first file input
        let fileInput1 = document.getElementById("file-input");
        let fileList1 = document.getElementById("file-list");
        let numOfFiles1 = document.getElementById("num-of-files");

        handleFileInputChange(fileInput1, fileList1, numOfFiles1);

        // For the second file input
        let fileInput2 = document.getElementById("file-input-1");
        let fileList2 = document.getElementById("file-list-1");
        let numOfFiles2 = document.getElementById("num-of-files-1");

        handleFileInputChange(fileInput2, fileList2, numOfFiles2);

    </script>



    <script src="./assets/js/main.js">


        var btnContainer = document.getElementById("sidemenu");
        var btns = btnContainer.getElementById('menu');

        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener('click', function () {
                var current = document.getElementsByClassName('active');
                current[0].className = current[0].className.replace("active");
                this.className += "active";
            })
        }
    </script>
</body>

</html>