import Axios from 'axios'
export default {
     showProducts(){
          return Axios.get('/api/products');
     },
     showProductsbyID(id){
          return Axios.get(`/api/products/${id}`)
     }
}