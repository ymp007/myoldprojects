import React from 'react'

import {
  Image,
  StatusBar,
  AppRegistry,
  View,
  Text,
  StyleSheet} from 'react-native'

import akshumomchild from './akshumomchild.jpg'

class App extends React.Component{
render(){
  return (
    <View style={styles.container}>
    <StatusBar hidden={true} />
    <Text style={[styles.selectedText,styles.defaultText]}>Yash</Text>
    <Text style={styles.defaultText}>YMP</Text>
    </View>
  )
}

}

const styles = StyleSheet.create({
  container:{
    flexDirection:'row',
    backgroundColor:'gray',
    justifyContent:'center',
    flex:1,
    alignItems:'center'
  },
  defaultText: {

    fontSize:50,
    padding:10,
    margin:20,
    color:'red',
    textAlign:'center',
    borderWidth: StyleSheet.hairlineWidth,
  },
  selectedText:{
    backgroundColor:'black',
    color:'white',
    fontWeight:'bold'
  }
})
AppRegistry.registerComponent('imageApp',() =>App);
