import  axios from 'axios';
import Product from '../API/Product'
import Cart from '../API/Cart'

export const getProducts = ({ commit }) => {
      Product.showProducts().then(response =>{
            commit('SET_PRODUCTS',response.data);
      })
}
export const viewProduct = ({ commit }, productId ) => {
     Product.showProductsbyID(productId).then(response =>{
            commit('VIEW_PRODUCT',response.data);
      })
 }

 export const addProductToCart = ({ commit }, {product, quantity} ) => {
      commit('ADD_TO_CART', {product, quantity});
      Cart.Add({
            product_id: product.id,
            quantity  
      })

 }
 export const getCartItems =  ({commit}) => {
      Cart.ShowItem().then( response => {
            commit('SET_CART', response.data);
       })
 }
 
 export const removeItemFromCart =  ({commit}, product) => {
      commit('REMOVE_ITEM_FROM_CART', product)
      Cart.RemoveItem(product.id)
}

export const clearCartItems =  ({commit}) => {
      commit('CLEAR_CART_ITEMS')
      Cart.Clear()
}
 
 
 
