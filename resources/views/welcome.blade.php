<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>


        <div id="root" class="container mt-3">
            <section class="border p-4 mb-4">
                <div class="form-outline mb-4">
                    <input type="search" id="datatable-search-input" class="form-control" v-model="search">
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;"></div>
                        <div class="form-notch-middle" style="width: 52px;"></div>
                        <div class="form-notch-trailing"></div>
                    </div>
                </div>
                <div id="datatable" class="datatable">
                    <div class="datatable-inner table-responsive ps ps--active-x" style="overflow: auto; position: relative;">
                        <table class="table datatable-table">
                            <thead class="datatable-header">
                                <tr>
                                    <th style="cursor: pointer;">
                                        <i class="datatable-sort-icon fas fa-arrow-up"></i> Name
                                    </th>
                                    <th style="cursor: pointer;">
                                        <i class="datatable-sort-icon fas fa-arrow-up"></i> Email
                                    </th>
                                    <th style="cursor: pointer;">
                                        <i class="datatable-sort-icon fas fa-arrow-up"></i> Email verified At
                                    </th>
                                    <th style="cursor: pointer;">
                                        <i class="datatable-sort-icon fas fa-arrow-up"></i> Created At
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for='user in filteredUsers'>
                                    <td>@{{ user.name }}</td>
                                    <td>@{{ user.email }}</td>
                                    <td>@{{ user.email_verified_at }}</td>
                                    <td>@{{ user.created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="ps__rail-x" style="width: 949px; left: 0px; bottom: 0px;">
                            <div tabindex="0" class="ps__thumb-x" style="left: 0px; width: 948px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div tabindex="0" class="ps__thumb-y" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
