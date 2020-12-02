class Transactions{
    constructor(dolil, khatiyan, amount){
        this.dolil = dolil;
        this.khatiyan = khatiyan;
        this.amount = amount;
    }
}
const SHA256 = require('crypto-js/sha256');
class Block{
    constructor(index, timestamp, transactions, previousHash = ''){
        this.index = index;
        this.timestamp = timestamp;
        this.transactions = transactions;
        this.previousHash = previousHash;
        this.hash = this.calculateHash();
    }
    calculateHash(){
        return SHA256(this.index + this.previousHash + this.timestamp + JSON.stringify(this.transactions)).toString(); 
    }
}
class Blockchain{
    constructor(){
        this.chain = [this.creategenesisBlock()];
    }
    creategenesisBlock(){
        return new Block(0,"01/01/2017","Genesis Book","0");
    }
    getLatestBlock(){
        return this.chain[this.chain.length-1];
    }
    addBlock(newBlock){
        newBlock.previousHash = this.getLatestBlock().hash;
        newBlock.hash = newBlock.calculateHash();
        this.chain.push(newBlock);
    }
    ischainValid(){
        for(let i =1; i < this.chain.length; i++){
            const currentBlock = this.chain[i];
            const previousBlock = this.chain[i-1];

            if(currentBlock.hash != currentBlock.calculateHash()){
                return false;
            }
            if(currentBlock.previousHash != previousBlock.hash){
                return false;
            }
        }
        return true;
    }
}

let anwar = new Blockchain();
anwar.addBlock(new Block(1, "10/07/2017",new Transactions("anwar","hosain","10")));
console.log(JSON.stringify(anwar,null,4));


