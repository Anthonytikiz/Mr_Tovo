<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        html, body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: Helvetica;
        }

        #tree {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="tree"></div>

    <script src="https://balkan.app/js/OrgChart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chart = new OrgChart(document.getElementById("tree"), {
                template: "ula",
                mouseScrool: OrgChart.none,
                nodeBinding: {
                    field_0: "Employee Name",
                    field_1: "Title",
                },
                editForm:{
                },
                nodeMenu: {
                    details: { text: "Details" },
                    edit: { text: "Edit" },
                    add: { text: "Add" },
                    remove: { text: "Remove" }
                }
            });

            chart.on('init', function (sender) {
                sender.editUI.show(1);
            });

            chart.load([
                { id: 1, "Employee Name": "Denny Curtis", Title: "CEO", Photo: "https://cdn.balkan.app/shared/2.jpg" },
                { id: 2, pid: 1, "Employee Name": "Ashley Barnett", Title: "Sales Manager", Photo: "https://cdn.balkan.app/shared/3.jpg" },
                { id: 3, pid: 1, "Employee Name": "Caden Ellison", Title: "Dev Manager", Photo: "https://cdn.balkan.app/shared/4.jpg" },
                { id: 4, pid: 2, "Employee Name": "Elliot Patel", Title: "Sales", Photo: "https://cdn.balkan.app/shared/5.jpg" },
                { id: 5, pid: 2, "Employee Name": "Lynn Hussain", Title: "Sales", Photo: "https://cdn.balkan.app/shared/6.jpg" },
                { id: 6, pid: 3, "Employee Name": "Tanner May", Title: "Developer", Photo: "https://cdn.balkan.app/shared/7.jpg" },
                { id: 7, pid: 3, "Employee Name": "Fran Parsons", Title: "Developer", Photo: "https://cdn.balkan.app/shared/8.jpg" }
            ]);
        });
    </script>
</body>
</html>
