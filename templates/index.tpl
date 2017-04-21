
<body>

    <header>
        <h1>{$message}</h1>
    </header>

    <div class="separa-20"></div>

    <section>
        <div class="container">
            <ul>
                {foreach from=$persona key=key item=curr_id}
                <li>{$key}: {$curr_id}</li>
                {/foreach}
            </ul>
        </div>

    </section>


</body>
