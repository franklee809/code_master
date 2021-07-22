class MaxHeapPriorityQueue {
    constructor() {
        this.values = []
        this.size = 0;
    }

    insert(value, priority) {
        // If no value, do nothing
        if (value === undefined) return;
        // Insert the value, and increment the size of the heap
        this.values.push({ value, priority });
        this.size++;
        // Check to see if there is not more than 1 item in the heap
        // If there is only 1 item, there is no need to bubble up
        if (this.size > 1) this._bubbleUp();
        return this.values;
    }

    _bubbleUp() {
        // Grab the most recently added value and its parent
        let currentIndex = this.size - 1;
        let parentIndex = Math.floor((currentIndex - 1) / 2);

        // Swap the new node with its parent until the new node either
        // becomes the root, or is no longer greater than its parent
        while (
            parentIndex >= 0 &&
            this.values[currentIndex] > this.values[parentIndex]
        ) {
            this._swap(currentIndex, parentIndex);
            currentIndex = parentIndex;
            parentIndex = Math.floor((currentIndex - 1) / 2);
        }
    }

    // Helper function using object destructuring to swap the elements at two indices
    _swap(index1, index2) {
        [this.values[index1], this.values[index2]] = [
            this.values[index2],
            this.values[index1]
        ];
    }

    extract() {
        if (this.size === 0) return;
        const lastIndex = this.size - 1;
        this.size--;
        this._swap(0, lastIndex);
        const extractValue = this.values.pop();
        if (this.size > 1) this._trickleDown();
        return extractValue;
    }

    _trickleDown() {
        let currentIndex = 0;
        /**
         * These will be the indexes corresponding to the left and right
         * child of the node at currentIndex
         * swapIdx will be which of the children the currentIndex will
         * actually switch with, if any
         */
        let leftIdx, rightIdx, swapIdx;
        while (true) {
            leftIdx = 2 * currentIndex + 1;
            rightIdx = 2 * currentIndex + 2;
            swapIdx = null;
            /**
             * If there is a valid left child and it is greater than the current value,
             * prepare to swap it
             */
            if (
                leftIdx < this.size &&
                this.values[currentIndex] < this.values[leftIdx]
            ) {
                swapIdx = leftIdx;
            }
            /**
             * If there is a valid right child and it is greater than the current value,
             * prepare to swap it if we haven't already prepared to swap with left child.
             * If we have prepared to swap with left child, we should only choose to swapIdx
             * with the right child instead if it is greater than the left child, meaning
             * it better fits the heap rule
             */
            if (
                rightIdx < this.size &&
                ((swapIdx === null &&
                    this.values[currentIndex] < this.values[rightIdx]) ||
                    (swapIdx !== null && this.values[rightIdx] > this.values[leftIdx]))
            ) {
                swapIdx = rightIdx;
            }
            if (swapIdx === null) break; // If no possibel swap was ID'd, we're done
            // Swap the parent with the identified child, update the currentIndex, and repeat
            this._swap(currentIndex, swapIdx);
            currentIndex = swapIdx;
        }
    }
}
/** Example **/
values = [
    [17, 1],
    [2, 1],
    [36, 3],
    [100, 2],
    [7, 3],
    [1, 1],
    [19, 3],
    [25, 1],
    [3, 4]
]
const heap = new MaxHeapPriorityQueue()
for (let val of values) {
    heap.insert(val[0], val[1])
}

// Output:
//   heap = [
//     {value: 3, priority: 4}
//     {value: 36, priority: 3}
//     {value: 19, priority: 3}
//     {value: 7, priority: 3}
//     {value: 100, priority: 2}
//     {value: 1, priority: 1}
//     {value: 17, priority: 1}
//     {value: 25, priority: 1}
//     {value: 2, priority: 1}
//   ]
