<template>
  <div id="app">
		<GameCardsStack
			:cards="visibleCards"
			@cardAccepted="handleCardAccepted"
			@cardRejected="handleCardRejected"
			@cardSkipped="handleCardSkipped"
			@hideCard="removeCardFromDeck"
		/>
  </div>
</template>

<script>
import GameCardsStack from "./components/GameCardsStack";

export default {
  name: "App",
  components: {
    GameCardsStack
  },

  data() {
    return {
      visibleCards: [{
      "name":"Exemplo de Pergunta?",
      "number": "1"
      }, {
      "name":"Exemplo de Pergunta?",
      "number": "2"
    }, {
      "name":"Exemplo de Pergunta?",
      "number": "3"
    }]
    };
  },

  methods: {
    handleCardAccepted() {
      console.log("handleCardAccepted");
    },
    handleCardRejected() {
      console.log("handleCardRejected");
    },
    handleCardSkipped() {
      console.log("handleCardSkipped");
    },
    removeCardFromDeck() {
      this.visibleCards.shift();
    }
  }
};
</script>

<style lang="scss">
@import "../sass/mixins.scss";

#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  text-align: center;
  display: flex;
  justify-content: center;
}
</style>
