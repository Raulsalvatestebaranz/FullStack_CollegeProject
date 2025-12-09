# Rock Paper Scissors – Testing Strategy (Based on My Code)

## 1. Verify UI Loads Correctly
- Ensure all three buttons exist and are clickable:
  - `button[data-choice="rock"]`
  - `button[data-choice="paper"]`
  - `button[data-choice="scissors"]`
- Ensure the output elements are present:
  - `#player`
  - `#computer`
  - `#result`

---

## 2. Test Player Button Interaction
Click each button and verify the correct text is displayed:

### Rock button
- Action: Click **Rock**
- Expected: `Your Choice: rock`

### Paper button
- Action: Click **Paper**
- Expected: `Your Choice: paper`

### Scissors button
- Action: Click **Scissors**
- Expected: `Your Choice: scissors`

---

## 3. Validate Computer Choice Output
After each button click:

`Computer Choice:` must be **one** of:
- `rock`
- `paper`
- `scissors`

It should never be undefined, empty, or invalid.

---

## 4. Validate Game Result Logic

### Tie cases
- When `playerChoice === computerChoice`
- Expected: `Result: It's a tie!`

### Win cases
- Rock beats Scissors → `You win!`
- Paper beats Rock → `You win!`
- Scissors beats Paper → `You win!`

### Lose cases
- Rock loses to Paper → `You lose!`
- Paper loses to Scissors → `You lose!`
- Scissors loses to Rock → `You lose!`

---

## 5. Validate UI Updates Correctly
Each new click must update all three outputs:
- `Your Choice: ...`
- `Computer Choice: ...`
- `Result: ...`

There should be no leftover text or incorrect values from previous rounds.

---

## 6. Test Repeated Rounds
- Clicking buttons many times should always update results correctly.
- Rounds should behave independently.
- No console errors.
- No duplicated or broken text.

---

## 7. Test Page Reload Behavior
After refreshing the page:
- Outputs should return to:
  - `Your Choice:`
  - `Computer Choice:`
  - `Result:`
- No previous game data remains.

