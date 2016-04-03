<head>

    <link rel="stylesheet" type="text/css" href="/stylesheets/main.css">
    <script src="/javascripts/main.js"></script>

    <link rel="stylesheet" href="/stylesheets/material design/material.min.css">
    <script src="/stylesheets/material design/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>

    <h1> New Timeline Form </h1>

    <div class="new-timeline-form box-shadow">

        <!-- SAVE THESE INTO THE DB -->
        <p id="name" class="input-field"> Timeline Name: <input type="text"></input> </p>
        <p id="length-pres" class="input-field"> Length of Time: <input type="text"></input> </p>

        <div class="add-btn input-field">
            <p class="new-text">Add new chunk of time!</p>
            <!-- Colored FAB button with ripple -->
            <a onclick="addTopic()">
                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                  <i class="material-icons">add</i>
                </button>
            </a>
        </div>

        <div class="newChunk">
            Chunk Name: <input type="text"></input></br></br>
            Weight: <input type="text"></input>
        </div>

        <!-- SAVE THESE INTO THE DB -->
        <div id="new-fields"></div>

        <a href="create-timeline">
            <button onclick="submitForm()"> CREATE TIMELINE </button>
        </a>

    </div>

</body>
