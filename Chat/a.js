import React, { Component } from 'react';
import { Text, View, AppRegistry } from 'react-native';

class HelloWorldApp extends Component {
  render() {
    return (
      <View style={{padding:40}}>
        <Text>Hello world!</Text>
      </View>
    );
  }
}

export default HelloWorldApp;
AppRegistry.registerComponent('HelloWorldApp', () => HelloWorldApp);