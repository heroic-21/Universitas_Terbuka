document.addEventListener("DOMContentLoaded", function () {
    const table1 = document.querySelector("#datatable_1");
    const table2 = document.querySelector("#datatable_2");

    if (table1) {
        var dataTable = new simpleDatatables.DataTable(table1, {
            searchable: true,
            fixedHeight: false,
        });
    }

    if (table2) {
        var dataTable_2 = new simpleDatatables.DataTable(table2);
    }

    const csvBtn = document.querySelector("button.csv");
    const sqlBtn = document.querySelector("button.sql");
    const txtBtn = document.querySelector("button.txt");
    const jsonBtn = document.querySelector("button.json");

    if (csvBtn && dataTable) {
        csvBtn.addEventListener("click", () => {
            dataTable.export({
                type: "csv",
                download: true,
                lineDelimiter: "\n\n",
                columnDelimiter: ";"
            });
        });
    }

    if (sqlBtn && dataTable_2) {
        sqlBtn.addEventListener("click", () => {
            dataTable_2.export({
                type: "sql",
                download: true,
                tableName: "export_table"
            });
        });
    }

    if (txtBtn && dataTable_2) {
        txtBtn.addEventListener("click", () => {
            dataTable_2.export({
                type: "txt",
                download: true,
            });
        });
    }

    if (jsonBtn && dataTable_2) {
        jsonBtn.addEventListener("click", () => {
            dataTable_2.export({
                type: "json",
                download: true,
                escapeHTML: true,
                space: 3
            });
        });
    }
});
