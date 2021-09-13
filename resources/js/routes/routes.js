import dashboard from "../components/backend/dashboard.vue";
import categories from "../components/backend/category/categories.vue";
import addCategory from "../components/backend/category/add_category.vue";

export const routes = [
    { path: '/dashboard', component: dashboard },
    { path: '/categories', component: categories },
    { path: '/add-category', component: addCategory },
  ];