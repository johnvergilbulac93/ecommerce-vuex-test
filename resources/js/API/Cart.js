import Axios from 'axios'

export default{
     Add(data){
          return Axios.post('/api/cart', data);
     },
     ShowItem(){
          return  Axios.get('/api/cart');
     },
     RemoveItem(id){
          return Axios.delete(`/api/cart/${id}`);
     },
     Clear(){
          return Axios.delete(`/api/cart`);
     }
}