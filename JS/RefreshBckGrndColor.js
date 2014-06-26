function refreshData()
    {
        x = 1000;  // x = milliseconds to refresh
        var d = new Date()
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();

        if (h<=9) {h = '0'+h};
        if (m<=9) {m = '0'+m};
        if (s<=9) {s = '0'+s};

        var	color = '#'+h+m+s;
        var dots = ':';
        var textToDisplay = '#'+h+dots+m+dots+s;
        $("div.background").css("background-color", color );
        $("a#hex").text(textToDisplay);
        
        setTimeout(refreshData, x);
    }

    refreshData(); // execute function