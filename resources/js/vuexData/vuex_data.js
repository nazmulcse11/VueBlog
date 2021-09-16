import axios from "axios";
import { data } from "jquery";

export default{
    state: {
        categoryData: [],

      },
      getters: {
        categories(state){
          return state.categoryData;
        }
      },
      actions: {
        getCategories(data){
          axios.get('get-categories').then((response) =>{
          data.commit('categories',response.data.categories);
          }).catch((error) => {
            console.log(error);
          })
        }
      },
      mutations: {
        categories(state,data){
           
        //  return works fine
          // return state.categoryData = data; 

          // without return works fine because directly set value by data
           state.categoryData = data;
        }
      }
}