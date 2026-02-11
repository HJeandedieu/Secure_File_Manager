<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure File Management</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #121212;
            color: #ffffff;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #000000;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 20px;
            text-align: center;
            border-bottom: 1px solid #444;
            padding-bottom: 10px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #333;
        }

        /* Main content */
        .main {
            flex: 1;
            padding: 30px;
            background-color: #1a1a1a;
        }

        .main h1 {
            margin-bottom: 20px;
            font-size: 26px;
        }

        /* Sections */
        .section {
            margin-bottom: 40px;
        }

        .section h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        input[type="file"],
        input[type="text"],
        button {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        button:hover {
            background-color: #555;
            cursor: pointer;
        }

        /* File list for delete */
        .file-list {
            margin-top: 10px;
            border-top: 1px solid #444;
            padding-top: 10px;
        }

        .file-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px solid #333;
        }

        .file-item button {
            background-color: #800000;
        }

        .file-item button:hover {
            background-color: #b00000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                overflow-x: auto;
                gap: 10px;
            }

            .sidebar a {
                flex: 1;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>File Manager</h2>
    <a href="#home">Home</a>
    <a href="#upload">Upload</a>
    <a href="#download">Download</a>
    <a href="#compress">Compress</a>
    <a href="#edit">Edit</a>
</div>

<div class="main">
    <h1>Welcome to Secure File Management</h1>

    <div id="upload" class="section">
        <h3>Upload File</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" required>
            <button type="submit">Upload</button>
        </form>
    </div>

    <div id="download" class="section">
        <h3>Download File</h3>
        <form action="download.php" method="get">
            <input type="text" name="filename" placeholder="Enter file name" required>
            <button type="submit">Download</button>
        </form>
    </div>

    <div id="compress" class="section">
        <h3>Compress File</h3>
        <form action="compress.php" method="post">
            <input type="text" name="filename" placeholder="Enter file name" required>
            <button type="submit">Compress</button>
        </form>
    </div>

    <div id="edit" class="section">
        <h3>Edit File</h3>
        <form action="edit.php" method="post">
            <input type="text" name="filename" placeholder="Enter file name" required>
            <button type="submit">Edit</button>
        </form>
    </div>

    <div id="delete" class="section">
        <h3>Delete File</h3>
        <div class="file-list">
            <div class="file-item">
                <span>example.txt</span>
                <button>Delete</button>
            </div>
            <div class="file-item">
                <span>document.pdf</span>
                <button>Delete</button>
            </div>
            <!-- Add more files dynamically with PHP -->
        </div>
    </div>

</div>

</body>
</html>
