


<template>
    <main>
        <div class="titel-container">
            <h1>Willkommen bei DriveApp</h1>
            <p>
                Herzlich willkommen auf der DriveApp-Plattform!
                Wir freuen uns, Sie hier zu haben. 
                Unser Ziel ist es, Ihnen eine nahtlose und effiziente Erfahrung im Bereich Transport und Lieferung zu bieten.
            </p>
        </div>
        

        <div class="container">
            
            <div class="text-container">
                <RouterLink to="/login" class="text">
                    <div>
                        <h2>Für Auftraggeber</h2>
                        <p>Sind Sie auf der Suche nach flexiblen Möglichkeiten, Ihr Einkommen zu steigern? Werden Sie Teil unseres engagierten Fahrerteams! Bei DriveApp bieten wir Ihnen die Möglichkeit, Aufträge in Ihrer Nähe anzunehmen und Ihren eigenen Zeitplan zu gestalten. Klicken Sie auf den untenstehenden Button, um zu Ihrer persönlichen Fahrer-Seite zu gelangen und beginnen Sie noch heute mit un</p>
                    </div>
                </RouterLink>
            </div>

            <div class="text-container">
                <RouterLink to="/login" class="text">
                    <div>
                        <h2>Für Auftragnehmer</h2>
                        <p>Suchen Sie nach einer zuverlässigen Lösung für Ihre Lieferbedürfnisse? Bei DriveApp können Sie einfach und schnell einen Transportauftrag erteilen. Egal, ob es sich um ein kleines Paket oder eine größere Lieferung handelt, wir haben die passende Lösung für Sie. Klicken Sie auf den untenstehenden Button, um zu Ihrer persönlichen Kunden-Seite zu gelangen und starten Sie noch heute Ihre Reise mit uns!</p>
                    </div>
                </RouterLink>
            </div>

        </div>
    
    </main>
</template>

<style scoped>
    .titel-container{
        color: azure;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 26px;
        margin-left: 5%;
        margin-right: 5%;
        
    }
    .h1{
        display: flex;
        justify-content: center;
    }
    .container{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-left: 15%;
        margin-right: 15%;
        margin-top: 5%;
        gap: 5%;

    }
    .text-container{
        width: 600px;
        background-color: gray;
        font-size: 26px;
    }
    .text{
        color: black;
        text-decoration: none;
        
    }
</style>
