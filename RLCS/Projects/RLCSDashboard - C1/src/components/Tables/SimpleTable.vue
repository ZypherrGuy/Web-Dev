<template>
  <div>
    <md-table v-model="users" :table-header-color="tableHeaderColor">
      <md-table-row slot="md-table-row" slot-scope="{ user }">
        <md-table-cell md-label="Name">{{ user.name }}</md-table-cell>
        <md-table-cell md-label="Country">{{ user.country }}</md-table-cell>
        <md-table-cell md-label="City">{{ user.city }}</md-table-cell>
        <md-table-cell md-label="Salary">{{ user.salary }}</md-table-cell>
      </md-table-row>
    </md-table>
  </div>
</template>

<script>
export default {
  name: "simple-table",
  props: {
    tableHeaderColor: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      selected: [],
      users: [
        {
          name: "Dakota Rice",
          salary: "$36,738",
          country: "Niger",
          city: "Oud-Turnhout",
        },
      ],
    };
  },
};
</script>
