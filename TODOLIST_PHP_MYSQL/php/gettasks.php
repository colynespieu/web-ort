<?php
require("sqlConnector.php");
$conn = new Sqlconnector();
$listtasks = $conn->getTasks(0);

echo "
        <script type='text/javascript'>
        function updatetask(titletaskid,desctaskid,submitid,formid,updateid){
            if (document.getElementById(submitid).innerHTML =='Enlever'){
                document.getElementById(submitid).innerHTML = 'Valider';
                document.getElementById(formid).action = 'php/updatetask.php';
                document.getElementById(titletaskid).removeAttribute('readonly');
                document.getElementById(desctaskid).removeAttribute('readonly');
                document.getElementById(updateid).innerHTML = 'Annuler';
            }
            else {
                document.getElementById(submitid).innerHTML ='Enlever';
                document.getElementById(formid).action = 'php/deletetask.php';
                document.getElementById(titletaskid).setAttribute('readonly',true);
                document.getElementById(desctaskid).setAttribute('readonly',true);
                document.getElementById(updateid).innerHTML = 'Modifier';
            }
        }
        </script>
";
foreach ($listtasks as $task) {

    $taskid = $task["id"];
    $tasktitre = $task["titre"];
    $taskdesc = $task["description"];

    echo"
            <form id='form$taskid' class='small-marge col-md-4' method='post' action='php/deletetask.php'>
                <div class='row'>
                    <div class='col-md-1'></div>
                    <div class='col-md-10'>
                        <input id='titletask$taskid' name='titletask' class='form-control' type='text' value=\"$tasktitre\" readonly>
                        <input type='hidden' name='taskid' value='$taskid'>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-1'></div>
                    <div class='col-md-10'>
                        <textarea id='desctask$taskid' name='desctask' class='form-control' type='text' rows=4 readonly>$taskdesc</textarea>
                        <button id='submit$taskid' type='submit' class='btn btn-primary' >Enlever</button>
                        <button id='update$taskid' type='button' onclick=\"updatetask('titletask$taskid','desctask$taskid','submit$taskid','form$taskid','update$taskid')\" class='btn btn-primary' >Modifier</button>
                    </div>
                    <div class='col-md-1'></div>
                </div>
            </form>
            ";
}