<footer class="win-ui-dark win-commandlayout navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="span6 align-left">
                    <button id="search" class="win-command">
                        <span class="win-commandicon win-commandring icon-search-2"></span>
                        <span class="win-label">Search</span>
                    </button>

                    <hr class="win-command" />

                    <button class="win-command">
                        <span class="win-commandicon win-commandring icon-reload"></span>
                        <span class="win-label">Reload</span>
                    </button>
                    <?php  include 'gui/search_form.php' ?>
                    
                </div>
                <div class="span6 align-right">
                    <button class="win-command" id="cmdDel">
                        <span class="win-commandicon win-commandring icon-remove"></span>
                        <span class="win-label">Delete</span>
                    </button>

                    <button class="win-command" id="staffAdd" data-toggle="modal" data-target="#myModal2">
                        <span class="win-commandicon win-commandring icon-plus-2"></span>
                        <span class="win-label disabled">Add</span>
                    </button>
                </div>
            </div>
        </div>
    </footer>