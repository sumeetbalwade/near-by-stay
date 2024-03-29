<form id="GFG" action="{{ route('admin.search-result') }}" method="GET">


    <div id="search-section">
        <div class="container ">
            <div class="row p-2 rounded-pill d-flex justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 px-1 my-sm-1">
                        <div class="
                                    input-icon-wrap
                                    d-flex
                                    align-items-center
                                    input-e
                                    rounded-pill
                                ">
                            <i class="fas fa-map-marker-alt"></i>
                            <input type="text" class="form-e rounded-pill" id="location" placeholder="Destination" name="location"
                                autocomplete="off" required />

                        </div>
                        <div class="list-group overflow-auto search-list">

                        </div>
                    </div>
                    <div class="col-md-2 px-1  my-sm-1">
                        <div class="
                                    input-icon-wrap
                                    d-flex
                                    align-items-center
                                    input-e
                                    rounded-pill
                                ">
                            <i class="fas fa-calendar-week"></i>

                            <input type="text" class="form-e rounded-pill flatpickr-input" id="check-in" name="check-in" 
                                placeholder="Check-In" readonly="readonly" required />
                        </div>
                    </div>

                    <div class="col-md-2 px-1  my-sm-1">
                        <div class="
                                    input-icon-wrap
                                    d-flex
                                    align-items-center
                                    input-e
                                    rounded-pill
                                ">
                            <i class="fas fa-calendar-week"></i>

                            <input type="text" class="form-e rounded-pill flatpickr-input" id="check-out" name="check-out"
                                placeholder="Check-Out" readonly="readonly" required />
                        </div>
                    </div>

                    <div class="col justify-content-center  my-sm-1" style="max-width: max-content">
                        <div class="row d-flex">
                            <div class="
                                        input-icon-wrap
                                        d-flex
                                        align-items-center
                                        input-e
                                        rounded-pill
                                        mx-1
                                    " style="width: fit-content">
                                <i class="fas fa-user-alt"></i>

                                <select name="adult" id="number-of-adults" class="form-e rounded-pill" style="width: auto">
                                    <option value="">A</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5+</option>
                                </select>
                            </div>

                            <div class="
                                        input-icon-wrap
                                        d-flex
                                        align-items-center
                                        input-e
                                        rounded-pill
                                        mx-1
                                    " style="width: fit-content">
                                <i class="fas fa-baby"></i>

                                <select name="child" id="number-of-child" class="form-e rounded-pill" style="width: auto">
                                    <option value="">C</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>  
                    </div>

                    <div class="col-md-1 mx-2 px-1 d-flex
                        align-items-center justify-content-center" style="
                        height: fit-content;
                    ">
                        <div class="
                                    input-icon-wrap
                                    d-flex
                                    align-items-center
                                    justify-content-center
                                    input-e
                                    rounded-pill
                                " style="width: fit-content">
                            <a class="
                                        btn btn-danger btn-block
                                        w-100
                                        rounded-pill
                                        d-flex
                                        align-items-center
                                        justify-content-center
                                        
                                    " style="color: white" onclick="submit_form()">
                                <i class="fas fa-search" style="
                                            padding-left: 0;
                                            padding-right: 0.3rem;
                                            color: white;
                                        "></i>
                                Search
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>




<script>
    $(function() {
        $('#check-in').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            minDate: moment().format('DD/MM/YYYY'),
            locale: {
                format: 'DD-MM-YYYY'
            }

        });

        $('#check-in').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
        });
    });

    $(function() {
        $('#check-out').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            showDropdowns: true,
            autoApply: true,
            minDate: moment().format('DD/MM/YYYY'),
            locale: {
                format: 'DD-MM-YYYY'
            }

        });

        $('#check-out').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD-MM-YYYY'));
        });   
    });

</script>

<script src="{{ asset('js/search-head.js') }}"></script>


<script>
    function submit_form() {
        var query = $('#location').val();
        var checkin = $('#check-in').val();
        var checkout = $('#check-out').val();
        var checkout = $('#check-out').val();
        var child = $('#number-of-child').val();
        var adult = $('#number-of-adults').val();
        if (query.length > 0 && checkin != checkout && child != '' && adult != '' ) {
            document.getElementById("GFG").submit();
        }else{
            alert('fill All Details');
        }
    }
</script>