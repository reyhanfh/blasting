<template>
    <div>
        <div
            v-if="showSuccessAlert"
            class="alert alert-primary alert-dismissible fade show"
            role="alert"
        >
            <strong>{{ alertMessage }}</strong
            >.
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        <div class="mb-3 col-4">
            <input
                type="text"
                class="form-control"
                v-model="filter"
                placeholder="Cari data"
            />
        </div>
        <b-table
            bordered
            striped
            hover
            :items="filteredItems"
            :fields="fields"
            :per-page="perPage"
            :current-page="currentPage"
        >
            <template v-slot:cell(no)="data">
                {{ (currentPage - 1) * perPage + (data.index + 1) }}
            </template>
            <template v-slot:cell(actions)="data">
                <a
                    :href="`/blasting/deposit/viewhistory/${data.item.idhotel}`"
                    class="btn btn-primary btn-sm"
                    >History</a
                >
            </template>
        </b-table>
        <b-pagination
            v-model="currentPage"
            :total-rows="totalRows"
            :per-page="perPage"
            align="right"
        ></b-pagination>
    </div>
</template>

<script>
import axios from "axios";
import { BTable, BPagination } from "bootstrap-vue";

export default {
    components: { BTable, BPagination },
    data() {
        return {
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            fields: [
                { key: "no", label: "#", thStyle: { "text-align": "center" } },
                { key: "hotelname", label: "Nama Hotel" },
                { key: "nominal", label: "Saldo" },
                {
                    key: "actions",
                    label: "Actions",
                    tdClass: "text-center",
                    thClass: "text-center",
                },
            ],
            items: [],
            filter: "",
            currentPage: 1,
            perPage: 10,
            totalRows: 0,
            showSuccessAlert: false,
            alertMessage: "",
        };
    },
    mounted() {
        this.fetchData();
    },

    computed: {
        filteredItems() {
            if (this.filter) {
                return this.items.filter((item) => {
                    return item.payment
                        .toLowerCase()
                        .includes(this.filter.toLowerCase());
                });
            } else {
                return this.items;
            }
        },
    },

    methods: {
        fetchData() {
            axios
                .get(this.$root.baseurl + "blasting/deposit/getalldeposit")
                .then((response) => {
                    this.items = response.data;
                    this.totalRows = response.data.length;
                });
        },
    },
};
</script>
