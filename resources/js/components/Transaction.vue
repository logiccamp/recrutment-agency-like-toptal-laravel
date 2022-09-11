<template>
    <table class="table table-striped" id="agentsTable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(transaction, index) in transactions" :key="index">
                <td>{{ transaction.created_at }}</td>
                <td>{{ transaction.amount }}</td>
            </tr>
        </tbody>
    </table>
</template>

