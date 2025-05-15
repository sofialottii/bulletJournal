<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $templateParams["titolo"]; ?></title>
        <link rel="stylesheet" type="text/css" href="../css/style.css?v=46857" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>
        <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events :[
                {
                    title: 'Evento 1',
                    start: '2025-05-15',
                    end: '2025-05-20'
                },
                {
                    title: 'Evento 2',
                    start: '2023-10-05',
                    end: '2023-10-07'
                },
                {
                    title: 'Evento 3',
                    start: '2023-10-09T12:00:00',
                    allDay: false // will make the time show
                }
            ],
            dateClick: function(info) {
                alert('Clicked on: ' + info.dateStr);
            }
            });
            calendar.render();
        });

        </script>
    
    </head>

    <body>
        <header>
            <h1>BULLET JOURNAL</h1>
        </header>
        
        <main>
            <?php
            require($templateParams["nome"]);
            ?>
        </main>

        <footer>
            <p>Sofia Lotti 2025</p>
            <p>Contattami: sofialotti17@gmail.com</p>
        </footer>


    </body>
</html>